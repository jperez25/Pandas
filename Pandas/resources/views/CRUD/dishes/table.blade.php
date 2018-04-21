<table class="table table-striped">
  <thead class='thead-dark'>
    <tr>
      <th scope="col">Dishes Id</th>
      <th scope="col">Type</th>
      <th scope="col">Name</th>
      <th scope="col">Ingredients</th>
      <th scope="col">Price</th>
      <th scope="col">Created At</th>
      <th scope="col">Updated At</th>
    </tr>
  </thead>
  <tbody>
  <?php
    //print"<pre>"; print_r($orders); exit;

    ?>

    @foreach($dishes as $dish)
    <tr>
        <td>{{$dish->id}}</td>
        <td>{{$dish->type}}</td>
        <td>{{$dish->name}}</td>
        <td>{{$dish->ingredients}}</td>
        <td>{{$dish->price}}</td>
        <td>{{$dish->created_at}}</td>
        <td>{{$dish->updated_at}}</td>
        <td>
        <div class='col-sm-3'>
        {{Form::open(array('action' => array('DishesTableController@edit', $dish->id), 'method' => 'post', 'id'=>'edit'))}}
            <button class='btn btn-primary'><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit</button>
        {{Form::close()}}
        </div>
        
        <div class='col-sm-3'>
        
        {{Form::open(array('action' => array('DishesTableController@delete', $dish->id), 'method' => 'delete', 'onsubmit' => 'return confirm("Are you sure?")'))}}
         
            <button class='btn btn-danger'> <span class="glyphicon glyphicon-trash" aria-hidden="true" onclick=hide></span> Delete</button>
        {{Form::close()}}
           
        </div>
        </td>
    </tr>    
    
    @endforeach

    
  </tbody>
</table>
