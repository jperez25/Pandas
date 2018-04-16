@extends('admin.admin')

@section('content')

            <div class="alert alert-info">
                    + Insert a new Dish
            </div>
            
            {{Form::open(array('action' => array('DishesTableController@insert'), 'method' => 'post'))}}

                <div class="container">
                    <div class="col-sm-6">
                        <div class='row'>
                            <div class='col-sm-3'>
                                <label>Name:</label>
                            </div>
                            <div class='col-sm-3'>
                                <input id="name" type="text" align='left' name='dishName' required>
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
                                <input id="total" type="text" align='right' name='ingredients' required>
                            </div>
                            <br/>
                        </div>

                        <div class='row'>
                            <div class='col-sm-3'>
                                <label>Price:</label>
                            </div>
                            <div class='col-sm-3'>
                                <input id="total" type="text" align='right' name='price' required>
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

                
            <button class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Dish</button>
            {{Form::close()}}


@endsection