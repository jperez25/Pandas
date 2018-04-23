<table class="table table-striped">
  <thead class='thead-dark'>
    <tr>
      <th scope="col">Promotion Id</th>
      <th scope="col">Discount</th>
      <th scope="col">Item</th>
      <th scope="col">Description</th>
      <th scope="col">Created At</th>
      <th scope="col">Updated At</th>
    </tr>
  </thead>
  <tbody>

    @foreach($promos as $promo)
    <tr>
        <td>{{$promo->id}}</td>
        <td>{{$promo->discount}}</td>
        <td>{{$promo->item}}</td>
        <td>{{$promo->description}}</td>
        <td>{{$promo->created_at}}</td>
        <td>{{$promo->updated_at}}</td>
        <td>
        <div class='col-sm-3'>
        {{Form::open(array('action' => array('PromotionsTableController@edit', $promo->id), 'method' => 'post', 'id'=>'edit'))}}
            <button class='btn btn-primary'><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit</button>
        {{Form::close()}}
        </div>
        
        <div class='col-sm-3'>
        
        {{Form::open(array('action' => array('PromotionsTableController@delete', $promo->id), 'method' => 'delete', 'onsubmit' => 'return confirm("Are you sure?")'))}}
         
            <button class='btn btn-danger'> <span class="glyphicon glyphicon-trash" aria-hidden="true" onclick=hide></span> Delete</button>
        {{Form::close()}}
           
        </div>
        </td>
    </tr>    
    
    @endforeach

    
  </tbody>
</table>
