@extends('layouts.app')

@section('title', 'Buscar computador')

@section('content')
<form action="{{ route('computadores.buscar') }}" method="POST">
    @csrf
    <label>ID del computador:</label>
    <input type="number" name="id" class="form-control my-2" required>
    <button type="submit" class="btn btn-primary">Buscar</button>
</form>
@endsection
