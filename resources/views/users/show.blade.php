@extends('dashboard_admin.index')

@section ('title','U S E R S      D E L E T E')

@section ('content')

<form class="row g-3  needs-validation"  action="{{route('users.destroy',['user'=>$user->id])}}"  novalidate method="POST" enctype="multipart/form-data">
    @csrf
    @method('DELETE')
      <div class="col-2">
        
            {{-- separador de columnas --}}
      </div>
      <div class="col-md-4">
        <label for="validationDefault01" class="form-label">Ingrese un nombre</label>
        <input name="name" value="{{$user->name}}" type="text" class="form-control" id="validationDefault01"  maxlength="50" disabled >
        <div class="valid-feedback">
          Muy bien
        </div>
        <div class="invalid-feedback">
          Porfavor inserta un nombre de usuario
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationDefault02" class="form-label">Ingrese un numero de telefono</label>
        <input name="phone" value="{{$user->phone}}" type="number" class="form-control" id="validationDefault02" maxlength="10" disabled>
      </div>
      <div class="col-2">
                {{-- separador de columnas --}}
      </div>
      <div class="col-2">
        {{-- separador de columnas --}}
  </div>
      <div class="col-md-4">
        <label for="validationDefaultUsername" class="form-label">Ingrese un correo</label>
        <div class="input-group">
          <span class="input-group-text" id="inputGroupPrepend2">@</span>
          <input name="email" value="{{$user->email}}" type="text" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2"  disabled>
        </div>
      </div>
     
      <div class="col-md-4">
        <label for="validationDefault03" class="form-label">Ingrese una contraseña</label>
        <input name="password" value="{{$user->password}}" type="password" class="form-control" id="validationDefault03" disabled >
        <div class="valid-feedback">
          Muy bien
        </div>
        <div class="invalid-feedback">
          Porfavor inserta una contraseña
        </div>
      </div>
      <div class="col-2">
            {{-- separador de columnas --}}
      </div>
      <div class="col-2">
        {{-- separador de columnas --}}
  </div>
      <div class="col-md-3">
        <label for="validationDefault04" class="form-label">Ingrese una categoria</label>
        <select name="category" class="form-select" id="validationDefault04"  disabled>
          <option selected disabled value="{{$user->category}}">{{$user->category}}</option>
        </select>
      </div>
      <div class="col-1">
        {{-- separador de columnas --}}
  </div>
      <div class="col-4">
        <label for="formFileSm" class="form-label">Ingrese una foto del usuario</label>
        <input name="image" value="{{$user->image}}" class="form-control form-control-sm" id="formFileSm"  type="file" accept="image/*" disabled>
        <div class="valid-feedback">
          Muy bien
        </div>
        <div class="invalid-feedback">
          Porfavor inserte una imagen
        </div>
      </div>
      <div class="col-5">
        {{-- separador de columnas --}}
      </div>
      <div class="col-5">
        {{-- <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
          <label class="form-check-label" for="invalidCheck2">
            Agree to terms and conditions
          </label>
        </div> --}}
      </div>
      <div class="col-6">
            {{-- separador de columnas --}}
      </div>
      
      <div class="col-4">
        <button class="btn btn-success" type="submit">ELIMINAR</button>
      </div>
      <div class="col-6">
        {{-- separador de columnas --}}
  </div>
  <div class="col-6">
    {{-- separador de columnas --}}
  </div>
    </form>
    
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
      'use strict'
    
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      const forms = document.querySelectorAll('.needs-validation')
    
      // Loop over them and prevent submission
      Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
    
          form.classList.add('was-validated')
        }, false)
      })
    })()
    </script>

        
    @endsection