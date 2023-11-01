@extends('dashboard_admin.index')

@section ('title','U S E R S')

@section ('content')
@include ('users.create')
@include ('users.data')
@endsection