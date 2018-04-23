<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class PromotionsTableController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promo = DB::table('promotions')->get();
        return view('CRUD.promotions.promo', ['promos' => $promo]);
    }

    public function add()
    {
        return view('CRUD.promotions.add');
    }

    public function insert(Request $request){
        
        $disc = $request->input('discount');
        $item = $request->input('item');
        $description = $request->input('description');        
        

        DB::table('promotions')->insertGetId(
            ['discount' => $disc,
             'item' => $item,
             'description' => $description,
             'created_at' => Carbon::now(),
             'updated_at'=>Carbon::now()

            ]
        ); 
       return redirect('/promo');
     }

     public function edit($id){ 
        return view('Crud.promotions.editPromo', compact('id', $id));  
     }
     
     public function update($id, Request $request){ 

        $disc = $request->input('discount');
        $item = $request->input('item');
        $description = $request->input('description');              
        DB::table('promotions')->where('id', $id)->update(['discount'=> $disc,
                                                           'item'=> $item,
                                                           'description'=> $description,                                                                                                                                         
                                                           'updated_at'=>Carbon::now()]);
        return redirect('/promo');
     }

     public function delete($id){
        $affectedRows = DB::table('promotions')->where('id', $id)->delete();      
        
        return redirect('/promo');

     }
}
