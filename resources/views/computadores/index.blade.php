@extends('layouts.app')

@section('title', 'Listado de Computadores')

@section('content')
    <h1>Listado de Computadores</h1>

    <a href="{{ route('computadores.create') }}" class="btn btn-primary mb-3">Crear Nuevo Computador</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Código Tienda</th>
                <th>Almacenamiento</th>
                <th>RAM</th>
                <th>Tarjeta Gráfica</th>
                <th>Precio</th>
                <th>Procesador</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($computadores as $compu)
                <tr>
                    <td>{{ $compu->id }}</td>
                    <td>{{ $compu->codigo_tienda }}</td>
                    <td>{{ $compu->almacenamiento }}</td>
                    <td>{{ $compu->ram }}</td>
                    <td>{{ $compu->tarjeta_grafica }}</td>
                    <td>${{ number_format($compu->precio, 2) }}</td>
                    <td>{{ $compu->procesador }}</td>
                    <td>
                        <a href="{{ route('computadores.edit', $compu->id) }}" class="btn btn-sm btn-warning">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
s