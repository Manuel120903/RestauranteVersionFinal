  <div class="col-2"></div>
  <div class="col-9">
    <table class="table table-dark table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Cliente</th>
          <th scope="col">Mesa</th>
          <th scope="col">Ruta</th>   
          <th scope="col">Imagen</th>        
          <th scope="col">Editar</th>
          <th scope="col">Borrar</th>
          
          
         
        </tr>
      </thead>
      <tbody>
        @foreach ($order as $order)
      <tr>
       <th scope="row">{{$order->id}}</th>
       <th>{{$order->name}}</th>
       <th>{{$order->table_id}}</th>
       <th>{{$order->img1}}</th>
       <td> <img src="{{ asset ('storage/'.$order->img1) }}" alt="{{$order->img1}}" width="100px"></td>
       <td><a href="/admin/orders/{{$order->id}}/edit"><Em>EDITAR</Em></a></td>
       <td><a href="/admin/orders/{{$order->id}}"><Em>BORRAR</Em></a></td>
      </tr>
      @endforeach
      </tbody>
    </table>
  </div>