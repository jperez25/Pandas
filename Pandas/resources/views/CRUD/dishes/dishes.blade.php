@extends('admin.admin')

@section('content')
    <div class='container'>
    {{Form::open(array('action' => array('DishesTableController@add'), 'method' => 'get'))}}
        <button class='btn btn-primary'>
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
            Create new Dish!
        </button>
    {{Form::close()}}
        @include('CRUD.dishes.table')
    </div>
@endsection