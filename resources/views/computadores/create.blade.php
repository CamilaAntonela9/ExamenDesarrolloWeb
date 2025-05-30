@extends('layouts.app')

@section('title', 'Crear Computador')

@section('content')
<form action="{{ route('computadores.store') }}" method="POST">
    @csrf
    @include('computadores.form')
    <button type="submit" class="btn btn-success">Guardar</button>
</form>
@endsection
