<!doctype html>
<html lang="{{ app()->getLocale() }}">
    @include('head')
    <body>
        <div class='container'>
            <a class='btn btn-primary' onclick='displayAddOrders()'>
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                Create New Order!
             </a>
            @include('CRUD.orders.table')
        </div>
        
    </body>
</html>
