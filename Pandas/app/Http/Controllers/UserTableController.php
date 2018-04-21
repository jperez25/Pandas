<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Carbon\Carbon;
use Hash;


class UserTableController extends Controller
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
        $users = DB::table('users')->get();
        return view('CRUD.users.users', ['users' => $users]);
    }

    public function add()
    {
        return view('CRUD.users.add');
    }

    public function insert(Request $request){
        
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $phoneNumber = $request->input('phoneNumber');
        $level = $request->input('level');        
        
        
        DB::table('users')->insertGetId(
            ['name' => $disc,
             'email' => $email,
             'password' => Hash::make($password),
             'phoneNumber' => $phoneNumber,
             'level' => $level,             
             'created_at' => Carbon::now(),
             'updated_at'=>Carbon::now()

            ]
        ); 
       return redirect('/users');
     }

     public function edit($id){ 
        return view('Crud.users.editUsers', compact('id', $id));  
     }
     
     public function update($id, Request $request){ 

        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $phoneNumber = $request->input('phoneNumber');
        $level = $request->input('level');            
        DB::table('users')->where('id', $id)->update(['name' => $name,
                                                        'email' => $email,
                                                        'password' => Hash::make($password),
                                                        'phoneNumber' => $phoneNumber,
                                                        'level' => $level,                                                                                                                                         
                                                        'updated_at'=>Carbon::now()]);
        return redirect('/users');
     }

     public function delete($id){
        $affectedRows = DB::table('users')->where('id', $id)->delete();      
        
        return redirect('/users');

     }
}
