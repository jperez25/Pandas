@extends('admin.admin')

@section('content')
<div class='container'>
            <div class="alert alert-info">
                    Update an existing Dish
            </div>
            {{Form::open(array('action' => array('DishesTableController@update', $id), 'method' => 'PATCH', 'id' => 'update'))}}

                <div class="container">
                    <div class="col-sm-6">
                        <div class='row'>
                            <div class='col-sm-3'>
                                <label>Name:</label>
                            </div>
                            <div class='col-sm-3'>
                                <input type="text" align='left' name='dishName' value='{{DB::table('dishes')->where('id', $id )->value('name')}}' required>
                            </div>
                            <br/>
                        </div>

                        <div class='row'>
                            <div class='col-sm-3'>
                                <label>Type:</label>
                            </div>
                            <div class='col-sm-3'>
                                <select id="dishes" type="text" align='right' name='dishType[]' required>
                                    <option value="chicken">Chicken</option>
                                    <option value="beef">Beef</option>
                                    <option value="seafood">Sea Food</option>
                                    <option value="rice">Rice</option>
                                </select>
                            </div>
                            <br/>
                        </div>
                    
                        <div class='row'>
                            <div class='col-sm-3'>
                                <label>Ingredients:</label>
                            </div>
                            <div class='col-sm-3'>
                                <input type="text" align='left' name='ingredients' value='{{DB::table('dishes')->where('id', $id )->value('ingredients')}}' required>
                            </div>
                            <br/>
                        </div>

                        <div class='row'>
                            <div class='col-sm-3'>
                                <label>Price:</label>
                            </div>
                            <div class='col-sm-3'>
                                <input type="number" align='left' name='price' value='{{DB::table('dishes')->where('id', $id )->value('price')}}' required>                                
                            </div>
                            <br/>
                        </div>

                    </div>
                    <div class="form-group">
                        <label>Upload Image</label>
                        <div class="input-group">
                            <span class="input-group-btn">
                                <span class="btn btn-default btn-file">
                                    Browse… 
                                    <input type="file" id="imgInp">
                                </span>
                            </span>
                            <input type="text" class="form-control" readonly>
                        </div>
                        <img id='img-upload'/ width="100px" height="100px" hidden>
                    </div>                
                </div>

                
            <button class="btn btn-primary"><span class="glyphicon glyphicon-repeat" aria-hidden="true"></span> Update Dish</button>
            {{Form::close()}}
        </div>


@endsection