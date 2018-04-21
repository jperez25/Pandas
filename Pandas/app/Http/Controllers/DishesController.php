<?php

namespace App\Http\Controllers;

use App\dishes;
use Illuminate\Http\Request;

class DishesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->isAdmin()) {
            $dishes = dishes::all();
            return response()->json(array('dishes'=> $dishes), 200);
        }
        else{
            return redirect()->route('index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\dishes  $dishes
     * @return \Illuminate\Http\Response
     */
    public function show(dishes $dishes)
    {
        
            $dishes = dishes::all();
            return response()->json(array('dishes'=> $dishes), 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\dishes  $dishes
     * @return \Illuminate\Http\Response
     */
    public function edit(dishes $dishes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\dishes  $dishes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dishes $dishes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\dishes  $dishes
     * @return \Illuminate\Http\Response
     */
    public function destroy(dishes $dishes)
    {
        //
    }
}
