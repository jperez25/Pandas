@extends('layouts.app')

@section('content')
    <div class="container">
    @foreach($promos as $promo)
        <div clas="col-sm-3">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">{{$promo->discount}}</h3>
                </div>
            <div class="panel-body">
                <h4>{{$promo->item}}</h4>
                {{$promo->description}}
            </div>
        </div>
        

    @endforeach
    </div>



    


@endsection