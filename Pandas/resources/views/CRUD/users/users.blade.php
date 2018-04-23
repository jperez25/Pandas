@extends('admin.admin')

@section('content')
    <div class='container'>
    {{Form::open(array('action' => array('UserTableController@add'), 'method' => 'get'))}}
        <button class='btn btn-primary'>
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
            Create new User!
        </button>
    {{Form::close()}}
        @include('CRUD.users.table')
    </div>
@endsection