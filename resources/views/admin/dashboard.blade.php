@extends('admin.layout')

@section('content')
    <h1>Dashboard</h1>
    <p>Usuario logueado: <b>{{ auth()->user()->name }}</b></p>
@stop