<!-- index.blade.php -->
@extends('master')
@section('content')
  <div class="container">
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>FirstName</th>
        <th>LastName</th>
        <th>Email</th>
        <th>CardNumber</th>
        <th>Mobile</th>
        <th>Password</th>
      </tr>
    </thead>
    <tbody>
      @foreach($cruds as $post)
      <tr>
        <td>{{$post['ID']}}</td>
        <td>{{$post['FirstName']}}</td>
        <td>{{$post['LastName']}}</td>
        <td>{{$post['Email']}}</td>
        <td>{{$post['CardNumber']}}</td>
        <td>{{$post['Mobile']}}</td>
        <td>{{$post['Password']}}</td>
        <td><a href="{{action('CRUDController@edit', $post['ID'])}}" class=
          "btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('CRUDController@destroy', $post['ID'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection
