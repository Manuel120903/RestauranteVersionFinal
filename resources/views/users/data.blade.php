<div class="col-2"></div>
<div class="col-9">
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre del Usuario</th>
        <th scope="col">Numero de Telefono</th>
        <th scope="col">Categoria</th>
        <th scope="col">Ruta</th>
        <th scope="col">Imagen</th>
        <th scope="col">Editar</th>
        <th scope="col">Borrar</th>

      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
        
    
      <tr>
       <th scope="row"> {{$user->id}}</th>
       <th>{{$user->name}}</th>
       <th>{{$user->phone}}</th>
       <th>{{$user->category}}</th>
       <th>{{$user->image}}</th>
       <td> <img src="{{ asset ('storage/'.$user->image) }}" alt="{{$user->image}}" width="200px"></td>
       <td><a href="/admin/users/{{$user->id}}/edit"><Em>EDITAR</Em></a></td>
       <td><a href="/admin/users/{{$user->id}}"><Em>BORRAR</Em></a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>