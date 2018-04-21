<!doctype html>
<html lang="{{ app()->getLocale() }}">
    @include('head')
    <body>
        <div class='container'>
            <div class="alert alert-info">
                    + Insert a new Order
            </div>
            
            <form id="add" action='/insert' method='post'>

                {{csrf_field()}}
                <div class='row'>
                    <div class='col-sm-3'>
                        <label>Customer Name:</label>
                    </div>
                    <div class='col-sm-3'>
                        <input id="name" type="text" align='left' name='custumerName' required>
                    </div>
                    <br/>
                </div>

                <div class='row'>
                    <div class='col-sm-3'>
                        <label>Dishes:</label>
                    </div>
                    <div class='col-sm-3'>
                        <input id="dishes" type="text" align='right' name='dishes' required>
                    </div>
                    <br/>
                </div>

                <div class='row'>
                    <div class='col-sm-3'>
                        <label>Status:</label>
                    </div>
                    <div class='col-sm-3'>
                        <input id="status" type="text" align='right' name='status' required>
                    </div>
                    <br/>
                </div>
                
                <div class='row'>
                    <div class='col-sm-3'>
                        <label>Total</label>
                    </div>
                    <div class='col-sm-3'>
                        <input id="total" type="text" align='right' name='total' required>
                    </div>
                    <br/>
                </div>

            <button class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Order</button>
            </form>
        </div>
        
    </body>
</html>