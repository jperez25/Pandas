@extends('admin.admin')

@section('content')
    <div class='container'>
    {{Form::open(array('action' => array('PromotionsTableController@add'), 'method' => 'get'))}}
        <button class='btn btn-primary'>
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
            Create new Promotion!
        </button>
    {{Form::close()}}
        @include('CRUD.promotions.table')
    </div>
@endsection