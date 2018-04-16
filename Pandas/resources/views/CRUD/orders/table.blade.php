<table class="table table-striped">
  <thead class='thead-dark'>
    <tr>
      <th scope="col">order Id</th>
      <th scope="col">Costumer</th>
      <th scope="col">Dishes</th>
      <th scope="col">Total</th>
      <th scope="col">Created At</th>
      <th scope="col">Updated At</th>
    </tr>
  </thead>
  <tbody>
  <?php
    //print"<pre>"; print_r($orders); exit;

    ?>

    @foreach($orders as $order)
    <tr>
        <td>{{$order->id}}</td>
        <td>{{$order->customer}}</td>
        <td>{{$order->dishes}}</td>
        <td>{{$order->total}}</td>
        <td>{{$order->created_at}}</td>
        <td>{{$order->updated_at}}</td>
        <td>
        <div class='col-sm-3'>
        {{Form::open(array('action' => array('CRUDTableController@edit', $order->id), 'method' => 'post', 'id'=>'edit'))}}
            <button class='btn btn-primary'><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit</button>
        {{Form::close()}}
        </div>
        
        <div class='col-sm-3'>
        
        {{Form::open(array('action' => array('CRUDTableController@delete', $order->id), 'method' => 'delete', 'onsubmit' => 'return confirm("Are you sure?")', 'id'=>'delete'))}}
         
            <button class='btn btn-danger'> <span class="glyphicon glyphicon-trash" aria-hidden="true" onclick=hide></span> Delete</button>
        {{Form::close()}}
           
        </div>
        </td>
    </tr>    
    
    @endforeach

    
  </tbody>
</table>
