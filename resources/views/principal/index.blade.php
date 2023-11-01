@extends('dashboard_admin.index')

@section ('title','I N I C I O')
    
@section ('content')
<div class="row">
    <div class="col-2">
        <h1> </h1>
    </div>
    <div class="col-8">
        <h1><br> ¡Bienvenido! </h1>
    </div>
</div>
@include ('principal.create')
@include ('principal.data')
@endsection
