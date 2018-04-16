<!doctype html>
<html lang="{{ app()->getLocale() }}">
    @include('head')
    <body>
        <div class='container'>
            <div class="alert alert-info">
                    Update an existing Order
            </div>
            
            
            {{Form::open(array('action' => array('CRUDTableController@update', $id), 'method' => 'patch', 'id' => 'update'))}}
                {{csrf_field()}}
                
                <div class='row'>
                    <div class='col-sm-3'>
                        <label>Custumer Name:</label>
                    </div>
                    <div class='col-sm-3'>
                        <input type="text" align='left' name='custumerName' value='{{DB::table('orders')->where('id', $id )->value('customer')}}' required>
                    </div>
                    <br/>
                </div>

                <div class='row'>
                    <div class='col-sm-3'>
                        <label>Dishes:</label>
                    </div>
                    <div class='col-sm-3'>
                        <input type="text" align='right' name='dishes' value='{{DB::table('orders')->where('id', $id )->value('dishes')}}' required>
                    </div>
                    <br/>
                </div>
                
                <div class='row'>
                    <div class='col-sm-3'>
                        <label>Total</label>
                    </div>
                    <div class='col-sm-3'>
                        <input type="text" align='right' name='total' value='{{DB::table('orders')->where('id', $id )->value('total')}}' required>
                    </div>
                    <br/>
                </div>

            <button class="btn btn-primary">Update  Order</button>
            {{Form::close()}}
        </div>
        
    </body>
</html>