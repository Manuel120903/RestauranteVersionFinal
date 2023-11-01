@extends('dashboard_admin.index')

@section ('title','F O O D S      E D I T')

@section ('content')


<div class="container">
    
    <div class="row justify-content-center">
      <div class="col-md-6">
        <form class="row g-2 needs-validation"  action="/admin/foods/{{$foods->id}}" novalidate method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
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
            <input name="name" type="text" class="form-control" id="validationDefault01" value="{{$foods->name}}" maxlength="50" required>
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
    <select name="category" class="form-select" id="validationDefault04" required>
        <option value="" disabled></option> <!-- Opción vacía -->
        <option value="Desayuno" {{ $foods->category === 'Desayuno' ? 'selected' : '' }}>Desayuno</option>
        <option value="Comida" {{ $foods->category === 'Comida' ? 'selected' : '' }}>Comida</option>
        <option value="Entrada" {{ $foods->category === 'Entrada' ? 'selected' : '' }}>Entrada</option>
        <option value="Postre" {{ $foods->category === 'Postre' ? 'selected' : '' }}>Postre</option>
        <option value="Bebida" {{ $foods->category === 'Bebida' ? 'selected' : '' }}>Bebida</option>
    </select>
    <div class="invalid-feedback">
        Por favor inserta una categoría
    </div>
</div>

          <div class="col-md-8">
            <label for="validationDefault02" class="form-label">Descripción</label>
            <input name="description" type="text" class="form-control" id="validationDefault02" value="{{$foods->description}}" min="0" required>
          </div>
          
          <div class="col-md-8">
            <label for="validationDefault02" class="form-label">Costo del Platillo/Bebida</label>
            <input name="price" type="number" class="form-control" id="validationDefault02" value="{{$foods->price}}" min="0" required>
          </div>
          

          <div class="col-8">
            <label for="formFileSm" class="form-label">Ingrese una foto del platillo</label>
            <input name="img1" class="form-control form-control-sm" id="formFileSm"  type="file" value="{{$foods->img1}}">
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
              <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
              <label class="form-check-label" for="invalidCheck2">
                Agree to terms and conditions
              </label>
            </div>
          </div> --}}

          <div class="col-6">
            {{-- separador de columnas --}}
          </div>

          <div class="col-4">
            <button class="btn btn-danger" type="submit">GUARDAR CAMBIOS</button>
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