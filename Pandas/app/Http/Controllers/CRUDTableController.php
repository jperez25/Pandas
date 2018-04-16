<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

use DB;
use Carbon\Carbon;

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

        DB::table('orders')->insertGetId(
            ['customer' => $name,
             'dishes' => $dishes,
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
        //dd($request->route('id'));  
        DB::table('orders')->where('id', $request->route('id'))->update(['custumer'=> $name,
                                                                                  'dishes'=> $dishes,
                                                                                  'total'=> $total,
                                                                                  'updated_at'=>Carbon::now()]);

        echo "<script>window.location.replace('".route('admin')."'); </script>";
     }

     public function delete($id){
        $affectedRows = DB::table('orders')->where('id', $id)->delete();      
        
        echo "<script>window.location.replace('".route('admin')."'); </script>";

     }
}
