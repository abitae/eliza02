@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
@stop
@section('content')
    <div class="container-fluid">
        {{ $slot }} 
    </div>
    @livewire('wire-elements-modal')
    <x-livewire-alert::scripts />
    <x-livewire-alert::flash />
@stop
@section('css')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
