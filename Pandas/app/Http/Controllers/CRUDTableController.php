<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

use DB;
use Carbon\Carbon;
use Auth;

class CRUDTableController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $orders = DB::table('orders')->get();
        return view('CRUD.orders.welcome', ['orders' => $orders]);
    }

    public function add()
    {
        return view('CRUD.orders.addGroup');
    }

    public function insert(Request $request){
        
        $name = $request->input('custumerName');
        $dishes = $request->input('dishes');
        $total = $request->input('total'); 
        $status = $request->input('status');        

        DB::table('orders')->insertGetId(
            ['customer' => $name,
             'dishes' => $dishes,
             'status' => $status,
             'total' => $total,
             'created_at' => Carbon::now(),
             'updated_at'=>Carbon::now()

            ]
        ); 
       return redirect('admin');
        //echo "<script>window.location.replace('".route('admin')."'); </script>";
        //echo "Record inserted successfully.<br/>";
        //echo '<a href = "/">Click Here</a> to go back.';
     }

     public function edit($id){ 
        return view('Crud.orders.editGroup', compact('id', $id));  
     }
     
     public function update($id, Request $request){ 

         $this->validate( request(),
            [
                'custumerName'=> "required|min:10",
                'dishes'=> "required",
                'total'=> "required",
                
            ] 
         );  

        $name = $request->input('custumerName'); 
        $dishes = $request->input('dishes'); 
        $total = $request->input('total'); 
        $status = $request->input('status'); 
        //dd($request->route('id'));  
        DB::table('orders')->where('id', $request->route('id'))->update(['customer'=> $name,
                                                                                  'dishes'=> $dishes,
                                                                                  'total'=> $total,
                                                                                  'status' => $status,
                                                                                  'updated_at'=>Carbon::now()]);

        echo "<script>window.location.replace('".route('admin')."'); </script>";
     }

     public function delete($id){
        $affectedRows = DB::table('orders')->where('id', $id)->delete();      
        
        echo "<script>window.location.replace('".route('admin')."'); </script>";

     }

     public function createOrder(Request $request)
     {
        $allorderFromOneCustomer = DB::table('orders')->orderBy('updated_at', 'desc');
        $customer = DB::table('orders')->get()->where('customer', $request->customer)->first();
        $dishes = $request->dish.",". $customer->dishes;
        $total = $customer->total;
        $status = $customer->status;

        $dish = DB::table('dishes')->where('id', $request->dish)->get()->first();
        $price = $dish->price;
        
        //there is an order update
       if($status == "pending"){
            DB::table('orders')->where('id', $customer->id)->update(['customer'=> $request->customer,
                                                                    'dishes'=> $dishes,
                                                                    'total'=> number_format(floatval($total)+floatval($price), 2, '.', ''),
                                                                    'status' => $status,
                                                                    'updated_at'=>Carbon::now()]);
        }
        //We create an order insert
        else{
            DB::table('orders')->insertGetId(
                ['customer' => $request->customer,
                 'dishes' => $dish->name,
                 'status' => "pending",
                 'total' => $dish->price,
                 'created_at' => Carbon::now(),
                 'updated_at'=>Carbon::now()
    
                ]
            ); 
        }   
     }
     //get all items on user cars
     public function getItemsOnCart(Request $request)
     {
        $allorderFromOneCustomer = DB::table('orders')->orderBy('updated_at', 'desc');
        $customer = DB::table('orders')->get()->where('customer', Auth::user()->name)->first();

        $total = $customer->total;

        //return an array of strings with all the ids
        $dishesIds = explode("," ,$customer->dishes );

        $dishes = array();
        
        if($customer->status == 'pending'){
            foreach($dishesIds as $id){
                $dishes[] = DB::table('dishes')->where('id', $id)->get()->first();
            }
        }
        
        return view('cart', ["dishes" => $dishes, "total"=> number_format((float)$total, 2, '.', '')]);
     }

     public function removeFromCart(Request $request)
     {
        $allorderFromOneCustomer = DB::table('orders')->orderBy('updated_at', 'desc');
        $mostRecentOrder = DB::table('orders')->get()->where('customer', $request->customer)->first();

        $dishesIds = explode("," ,$mostRecentOrder->dishes );

        //recalculate total
        $total = $mostRecentOrder->total;
        $d = DB::table('dishes')->where('id', $request->dish)->get()->first();
        $priceRemovedDish = $d->price;

        //removing requested dish
        foreach($dishesIds as $id){
            if ($id == $request->dish) {
                unset($dishesIds[$request->dish]);
                break;
            }
        }

        $dish = "";
        $size = sizeof($dishesIds);
        $i = 0;

        //create new array of dishes
        foreach($dishesIds as $id){
            if($i == $size-1){
                $dish .= trim($id, '\s'); 
            }
            else{
                $dish .= trim($id,'\s').", "; 
            }  
            $i++;          
        }

       /*$p = 0;        
        foreach($dishesIds as $id){
            $dish = DB::table('dishes')->where('id', $id)->get()->first();
            $price = $price + floatval($dish->price);
        } */       

       DB::table('orders')->where('id', $mostRecentOrder->id)->update(['dishes'=> $dish,
                                                                        "total"=>number_format(floatval($total)-floatval($priceRemovedDish), 2, '.', ''),                
                                                                        'updated_at'=>Carbon::now()]);

       return response()->json(floatval($total)-floatval($priceRemovedDish));
     }
}
