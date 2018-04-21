@extends('admin.admin')

@section('content')

            <div class="alert alert-info">
                    + Create a new Promotion
            </div>
            
            {{Form::open(array('action' => array('PromotionsTableController@insert'), 'method' => 'post'))}}

                <div class="container">
                    <div class="col-sm-6">
                        <div class='row'>
                            <div class='col-sm-3'>
                                <label>Discount:</label>
                            </div>
                            <div class='col-sm-3'>
                                <input id="name" type="text" align='left' name='discount' required>
                            </div>
                            <br/>
                        </div>

                        <div class='row'>
                            <div class='col-sm-3'>
                                <label>Item:</label>
                            </div>
                            <div class='col-sm-3'>
                                <input id="total" type="text" align='right' name='item' required>
                            </div>
                            <br/>
                        </div>
                    
                        <div class='row'>
                            <div class='col-sm-3'>
                                <label>Description:</label>
                            </div>
                            <div class='col-sm-3'>
                                <textarea rows="3" cols="50" id="total" type="text" align='right' name='description' required></textarea>
                            </div>
                            <br/>
                        </div>

                
            <button class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Promotion</button>
            {{Form::close()}}


@endsection