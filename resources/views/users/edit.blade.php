@extends('dashboard_admin.index')

@section ('title', 'U S E R S      E D I T')

@section ('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="mt-4">Editar Usuario</h2>
            <form class="needs-validation mt-4" action="{{route('users.update',['user'=>$user->id])}}" novalidate method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="validationDefault01" class="form-label">Nombre</label>
                    <input name="name" type="text" class="form-control" id="validationDefault01" maxlength="50">
                    <div class="valid-feedback">
                        Muy bien
                    </div>
                    <div class="invalid-feedback">
                        Por favor, inserta un nombre de usuario
                    </div>
                </div>

                <div class="mb-3">
                    <label for="validationDefault02" class="form-label">Número de teléfono</label>
                    <input name="phone" type="number" class="form-control" id="validationDefault02" maxlength="10"
                       >
                    <div class="valid-feedback">
                        Muy bien
                    </div>
                    <div class="invalid-feedback">
                        Por favor, inserta un número de teléfono
                    </div>
                </div>

                <div class="mb-3">
                    <label for="validationDefaultUsername" class="form-label">Correo</label>
                    <div class="input-group">
                        <span class="input-group-text" id="inputGroupPrepend2">@</span>
                        <input name="email" type="text" class="form-control" id="validationDefaultUsername"
                            aria-describedby="inputGroupPrepend2" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="validationDefault03" class="form-label">Contraseña</label>
                    <input name="password" type="password" class="form-control" id="validationDefault03" >
                    <div class="valid-feedback">
                        Muy bien
                    </div>
                    <div class="invalid-feedback">
                        Por favor, inserta una contraseña
                    </div>
                </div>

                <div class="mb-3">
                    <label for="validationDefault04" class="form-label">Categoría</label>
                    <select name="category" class="form-select" id="validationDefault04" >
                        <option selected disabled value="">Escoge...</option>
                        <option>Cocinero</option>
                        <option>Mesero</option>
                        <option>Caja</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="formFileSm" class="form-label">Foto del usuario</label>
                    <input name="image" class="form-control form-control-sm" id="formFileSm" type="file"
                        accept="image/*" >
                    <div class="valid-feedback">
                        Muy bien
                    </div>
                    <div class="invalid-feedback">
                        Por favor, inserte una imagen
                    </div>
                </div>

                <div class="text-center mb-4">
                    <button class="btn btn-success" type="submit">Guardar</button>
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
