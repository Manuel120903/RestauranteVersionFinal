<div class="col-2"></div>
<div class="col-9">
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Tipo</th>
        <th scope="col">Descripción</th>
        <th scope="col">Imagen</th>        
        <th scope="col">Editar</th>
        <th scope="col">Borrar</th>
      </tr>
    </thead>
    <tbody> 
      @foreach ($food as $food)
        
    
      <tr>
       <th scope="row">{{$food->id}}</th>
       <th>{{$food->name}}</th>
       <th>{{$food->category}}</th>
       <th>{{$food->description}}</th>
       
       <td> <img src="{{ asset ('storage/'.$food->img1) }}" alt="{{$food->img1}}" width="50px" ></td>
       <td><a href="/admin/foods/{{$food->id}}/edit"><Em>EDITAR</Em></a></td>
       <td><a href="/admin/foods/{{$food->id}}"><Em>BORRAR</Em></a></td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
</div>