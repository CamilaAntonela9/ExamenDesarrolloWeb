@extends('layouts.app')

@section('title', 'Editar Computador')

@section('content')
    <h1>Editar Computador</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('computadores.update', $computador->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="codigo_tienda" class="form-label">Código Tienda</label>
            <input type="text" name="codigo_tienda" id="codigo_tienda" class="form-control" value="{{ old('codigo_tienda', $computador->codigo_tienda) }}" required>
        </div>

        <div class="mb-3">
            <label for="almacenamiento" class="form-label">Almacenamiento</label>
            <input type="text" name="almacenamiento" id="almacenamiento" class="form-control" value="{{ old('almacenamiento', $computador->almacenamiento) }}" required>
        </div>

        <div class="mb-3">
            <label for="ram" class="form-label">RAM</label>
            <input type="text" name="ram" id="ram" class="form-control" value="{{ old('ram', $computador->ram) }}" required>
        </div>

        <div class="mb-3">
            <label for="tarjeta_grafica" class="form-label">Tarjeta Gráfica</label>
            <input type="text" name="tarjeta_grafica" id="tarjeta_grafica" class="form-control" value="{{ old('tarjeta_grafica', $computador->tarjeta_grafica) }}" required>
        </div>

        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input type="number" step="0.01" name="precio" id="precio" class="form-control" value="{{ old('precio', $computador->precio) }}" required>
        </div>

        <div class="mb-3">
            <label for="procesador" class="form-label">Procesador</label>
            <input type="text" name="procesador" id="procesador" class="form-control" value="{{ old('procesador', $computador->procesador) }}" required>
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea name="descripcion" id="descripcion" class="form-control">{{ old('descripcion', $computador->descripcion) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="imagen" class="form-label">Imagen (URL o path)</label>
            <input type="text" name="imagen" id="imagen" class="form-control" value="{{ old('imagen
