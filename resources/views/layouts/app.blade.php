@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    {{ $slot }}
@stop

@section('css')
   
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
