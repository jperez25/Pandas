<?php

namespace App\Http\Controllers;

use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DishesTableController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $dishes = DB::table('dishes')->get();
        return view('CRUD.dishes.dishes', ['dishes' => $dishes]);
    }

    public function add()
    {
        return view('CRUD.dishes.add');
    }

    public function insert(Request $request){
        
        $name = $request->input('dishName');
        $type = $request->dishType[0];
        $ingredients = $request->input('ingredients');        
        $price = $request->input('price');

        DB::table('dishes')->insertGetId(
            ['name' => $name,
             'type' => $type,
             'ingredients' => $ingredients,
             'price' => $price,
             'created_at' => Carbon::now(),
             'updated_at'=>Carbon::now()

            ]
        ); 
       return redirect('/dishes');
        //echo "<script>window.location.replace('".route('admin')."'); </script>";
        //echo "Record inserted successfully.<br/>";
        //echo '<a href = "/">Click Here</a> to go back.';
     }

     public function edit($id){ 
        return view('Crud.dishes.editDish', compact('id', $id));  
     }
     
     public function update($id, Request $request){ 

        //Cannot validate in update
         /*$this->validate( request(),
            [
                'dishName'=> "required",
                'disheType'=> "required",
                'ingredients'=> "required",
                'price'=> "required | numeric",                
                
            ] 
         );  */

        $name = $request->input('dishName'); 
        $type = $request->dishType[0]; 
        $ingre = $request->input('ingredients'); 
        $price = $request->input('price');         
        //dd($request);  
        DB::table('dishes')->where('id', $id)->update(['name'=> $name,
                                                       'type'=> $type,
                                                       'ingredients'=> $ingre,                                                                                  
                                                       'price'=> $price,
                                                       'updated_at'=>Carbon::now()]);
        return redirect('/dishes');
        //echo "<script>window.location.replace('".route('admin')."'); </script>";
     }

     public function delete($id){
        $affectedRows = DB::table('dishes')->where('id', $id)->delete();      
        
        return redirect('/dishes');
        //echo "<script>window.location.replace('".route('admin')."'); </script>";

     }
}
