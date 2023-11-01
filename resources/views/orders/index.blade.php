@extends('dashboard_admin.index')

@section ('title','O R D E R S')
{{-- s --}}
@section ('content')
@include ('orders.create')
@include ('orders.data')
@endsection