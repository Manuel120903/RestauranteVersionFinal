@extends('dashboard_admin.index')

@section ('title','F O O D S      D E L E T E')

@section ('content')


<div class="container">
    
    <div class="row justify-content-center">
      <div class="col-md-6">
        <form class="row g-2 needs-validation"  action="/admin/foods/{{$foods->id}}" novalidate method="POST">
          @csrf
          @method('DELETE')
          <div class="col-12">
            {{-- separador de columnas --}}
          </div>
          <div class="col-12">
            {{-- separador de columnas --}}
          </div>

          <div class="col-12">
            {{-- separador de columnas --}}
          </div>
          <div class="col-12">
            {{-- separador de columnas --}}
          </div>
          <div class="col-12">
            {{-- separador de columnas --}}
          </div>
          <div class="col-12">
            {{-- separador de columnas --}}
          </div>
          <div class="col-md-5">
            <label for="validationDefault01" class="form-label">Nombre del platillo/bebida</label>
            <input name="name" type="text" class="form-control" id="validationDefault01" placeholder="Escribe un platillo" 
            value="{{$foods->name}}" maxlength="50" disabled>
            <div class="valid-feedback">
              Muy bien
            </div>
            <div class="invalid-feedback">
              Porfavor inserta un nombre de platillo
            </div>
          </div>
          <div class="col-1">
            {{-- separador de columnas --}}
          </div>
          <div class="col-md-5">
            <label for="validationDefault04" class="form-label">Categoria</label>
            <select name="category" class="form-select" id="validationDefault04" disabled>
              <option selected disabled value="{{$foods->category}}">{{$foods->category}}</option>
            </select>
            <div class="invalid-feedback">
              Porfavor inserta una categoria 
            </div>
          </div>

          <div class="col-md-8">
            <label for="validationDefault02" class="form-label">Descripción</label>
            <input name="description" value="{{$foods->description}}" type="text" class="form-control" id="validationDefault02" placeholder="Escribe una descripción" min="0" disabled>
          </div>
          
          <div class="col-md-8">
            <label for="validationDefault02" class="form-label">Costo del Platillo/Bebida</label>
            <input name="price" type="number" class="form-control" id="validationDefault02" placeholder="Escribe un precio" min="0" disabled>
          </div>
          

          <div class="col-8">
            <label for="formFileSm" class="form-label">Ingrese una foto del platillo</label>
            <input name="img1" value="{{$foods->img1}}" class="form-control form-control-sm" id="formFileSm"  type="file" disabled>
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

          {{-- <div class="col-md-3">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">
              Default checkbox
            </label>
          </div> --}}

 

          <div class="col-5">
            {{-- separador de columnas --}}
          </div>

          {{-- <div class="col-5">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" disabled>
              <label class="form-check-label" for="invalidCheck2">
                Agree to terms and conditions
              </label>
            </div>
          </div> --}}

          <div class="col-6">
            {{-- separador de columnas --}}
          </div>

          <div class="col-4">
            <button class="btn btn-danger" type="submit">ELIMINAR</button>
          </div>
          <div class="col-6">
            {{-- separador de columnas --}}
          </div>
          <div class="col-6">
            {{-- separador de columnas --}}
          </div>
          <div class="col-6">
            {{-- separador de columnas --}}
          </div>
          <div class="col-6">
            {{-- separador de columnas --}}
          </div>
        </form>
      </div>
    </div>
  </div>


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