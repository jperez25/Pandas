@extends('admin.admin')

@section('content')
<div class='container'>
            <div class="alert alert-info">
                    Update an existing User
            </div>
            {{Form::open(array('action' => array('UserTableController@update', $id), 'method' => 'PATCH', 'id' => 'update'))}}

                <div class="container">
                    <div class="col-sm-6">
                        <div class='row'>
                            <div class='col-sm-3'>
                                <label>Name:</label>
                            </div>
                            <div class='col-sm-3'>
                                <input id="name" type="text" align='left' name='name' value='{{DB::table('users')->where('id', $id )->value('name')}}' required>
                            </div>
                            <br/>
                        </div>

                        <div class='row'>
                            <div class='col-sm-3'>
                                <label>Email:</label>
                            </div>
                            <div class='col-sm-3'>
                                <input id="total" type="text" align='right' name='email' value='{{DB::table('users')->where('id', $id )->value('email')}}' required>
                            </div>
                            <br/>
                        </div>
                    
                        <div class='row'>
                            <div class='col-sm-3'>
                                <label>Password:</label>
                            </div>
                            <div class='col-sm-3'>
                                <input id="total" type="text" align='right' name='password' value='Enter New Password' required>
                            </div>
                            <br/>
                        </div>

                        <div class='row'>
                            <div class='col-sm-3'>
                                <label>Phone #:</label>
                            </div>
                            <div class='col-sm-3'>
                                <input id="total" type="text" align='right' name='phoneNumber' value='{{DB::table('users')->where('id', $id )->value('phoneNumber')}}' required>
                            </div>
                            <br/>
                        </div>  

                        <div class='row'>
                            <div class='col-sm-3'>
                                <label>Level:</label>
                            </div>
                            <div class='col-sm-3'>
                                <input id="total" type="text" align='right' name='level' value='{{DB::table('users')->where('id', $id )->value('level')}}' required>
                            </div>
                            <br/>
                        </div>
                
            <button class="btn btn-primary"><span class="glyphicon glyphicon-repeat" aria-hidden="true"></span> Update User</button>
            {{Form::close()}}
        </div>


@endsection