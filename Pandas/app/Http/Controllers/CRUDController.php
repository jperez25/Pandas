<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Crud;

class CRUDController extends Controller
{
  /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
     $cruds = Crud::all()->toArray();

        return view('crud.index', compact('cruds'));

   }

  // CRUDController.php

/**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      return view('crud.create');
  }

/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $crud = new Crud([
          'FirstName' => $request->get('FirstName'),
          'LastName' => $request->get('LastName'),
          'Email' => $request->get('Email'),
          'CardNumber' => $request->get('CardNumber'),
          'Mobile' => $request->get('Mobile'),
          'Password' => $request->get('Password')
        ]);

        $crud->save();
        return redirect('/crud');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $crud = Crud::find($id);

        return view('crud.edit', compact('crud','id'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $crud = Crud::find($id);
        $crud->FirstName = $request->get('FirstName');
        $crud->LastName = $request->get('LastName');
        $crud->Email = $request->get('Email');
        $crud->CardNumber = $request->get('CardNumber');
        $crud->Mobile = $request->get('Mobile');
        $crud->Password = $request->get('Password');
        $crud->save();
        return redirect('/crud');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $crud = Crud::find($id);
      $crud->delete();

      return redirect('/crud');

    }
}
