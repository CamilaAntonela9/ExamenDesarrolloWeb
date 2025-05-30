<div class="mb-3">
    <label>Código Tienda</label>
    <input type="text" name="codigo_tienda" class="form-control" value="{{ old('codigo_tienda', $computador->codigo_tienda ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Almacenamiento</label>
    <input type="text" name="almacenamiento" class="form-control" value="{{ old('almacenamiento', $computador->almacenamiento ?? '') }}" required>
</div>
<div class="mb-3">
    <label>RAM</label>
    <input type="text" name="ram" class="form-control" value="{{ old('ram', $computador->ram ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Tarjeta Gráfica</label>
    <input type="text" name="targeta_grafica" class="form-control" value="{{ old('targeta_grafica', $computador->targeta_grafica ?? '') }}">
</div>
<div class="mb-3">
    <label>Precio</label>
    <input type="number" step="0.01" name="precio" class="form-control" value="{{ old('precio', $computador->precio ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Descripción</label>
    <textarea name="descripcion" class="form-control">{{ old('descripcion', $computador->descripcion ?? '') }}</textarea>
</div>
<div class="mb-3">
    <label>Imagen (URL)</label>
    <input type="text" name="imagen" class="form-control" value="{{ old('imagen', $computador->imagen ?? '') }}">
</div>
<div class="mb-3">
    <label>Procesador</label>
    <input type="text" name="procesador" class="form-control" value="{{ old('procesador', $computador->procesador ?? '') }}" required>
</div>
