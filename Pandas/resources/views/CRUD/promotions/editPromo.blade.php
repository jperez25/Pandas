@extends('admin.admin')

@section('content')
<div class='container'>
            <div class="alert alert-info">
                    Update an existing Promotion
            </div>
            {{Form::open(array('action' => array('PromotionsTableController@update', $id), 'method' => 'PATCH', 'id' => 'update'))}}

                <div class="container">
                    <div class="col-sm-6">
                        <div class='row'>
                            <div class='col-sm-3'>
                                <label>Discount:</label>
                            </div>
                            <div class='col-sm-3'>
                                <input type="text" align='left' name='discount' value='{{DB::table('promotions')->where('id', $id )->value('discount')}}' required>
                            </div>
                            <br/>
                        </div>

                        <div class='row'>
                            <div class='col-sm-3'>
                                <label>Item:</label>
                            </div>
                            <div class='col-sm-3'>
                                <input type="text" align='left' name='item' value='{{DB::table('promotions')->where('id', $id )->value('item')}}' required>
                            </div>
                            <br/>
                        </div>
                    
                        <div class='row'>
                            <div class='col-sm-3'>
                                <label>Description:</label>
                            </div>
                            <div class='col-sm-3'>
                                <textarea  rows="3" cols="50" type="text" align='left' name='description' required>{{DB::table('promotions')->where('id', $id )->value('description')}}</textarea>
                            </div>
                            <br/>
                        </div>

                
            <button class="btn btn-primary"><span class="glyphicon glyphicon-repeat" aria-hidden="true"></span> Update Promotion</button>
            {{Form::close()}}
        </div>


@endsection