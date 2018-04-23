<table class="table table-striped">
  <thead class='thead-dark'>
    <tr>
      <th scope="col">User Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col" style="max-width: 100px;">Password</th>
      <th scope="col">Phone #</th>
      <th scope="col">Level</th>
      <th scope="col">Created At</th>
      <th scope="col">Updated At</th>
    </tr>
  </thead>
  <tbody>

    @foreach($users as $user)
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td >Hashed</td>
        <td>{{$user->phoneNumber}}</td>
        <td>{{$user->level}}</td>
        <td>{{$user->created_at}}</td>
        <td>{{$user->updated_at}}</td>
        <td>
        <div class='col-sm-6'>
        {{Form::open(array('action' => array('UserTableController@edit', $user->id), 'method' => 'post', 'id'=>'edit'))}}
            <button class='btn btn-primary'><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit</button>
        {{Form::close()}}
        </div>
        
        <div class='col-sm-6'>
        
        {{Form::open(array('action' => array('UserTableController@delete', $user->id), 'method' => 'delete', 'onsubmit' => 'return confirm("Are you sure?")'))}}
         
            <button class='btn btn-danger'> <span class="glyphicon glyphicon-trash" aria-hidden="true" onclick=hide></span> Delete</button>
        {{Form::close()}}
           
        </div>
        </td>
    </tr>    
    
    @endforeach

    
  </tbody>
</table>
