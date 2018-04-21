@extends('admin.admin')

@section('content')

            <div class="alert alert-info">
                    + Create a new Promotion
            </div>
            
            {{Form::open(array('action' => array('UserTableController@insert'), 'method' => 'post'))}}

                <div class="container">
                    <div class="col-sm-6">
                        <div class='row'>
                            <div class='col-sm-3'>
                                <label>Name:</label>
                            </div>
                            <div class='col-sm-3'>
                                <input id="name" type="text" align='left' name='name' required>
                            </div>
                            <br/>
                        </div>

                        <div class='row'>
                            <div class='col-sm-3'>
                                <label>Email:</label>
                            </div>
                            <div class='col-sm-3'>
                                <input id="total" type="text" align='right' name='email' required>
                            </div>
                            <br/>
                        </div>
                    
                        <div class='row'>
                            <div class='col-sm-3'>
                                <label>Password:</label>
                            </div>
                            <div class='col-sm-3'>
                                <input id="total" type="text" align='right' name='password' required>
                            </div>
                            <br/>
                        </div>

                        <div class='row'>
                            <div class='col-sm-3'>
                                <label>Phone #:</label>
                            </div>
                            <div class='col-sm-3'>
                                <input id="total" type="text" align='right' name='phoneNumber' required>
                            </div>
                            <br/>
                        </div>  

                        <div class='row'>
                            <div class='col-sm-3'>
                                <label>Level:</label>
                            </div>
                            <div class='col-sm-3'>
                                <input id="total" type="text" align='right' name='level' required>
                            </div>
                            <br/>
                        </div>

                
            <button class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add user</button>
            {{Form::close()}}


@endsection