@extends('layouts.app')

@section('title', 'Registrar Mascota')

@section('content')
<div class="card">
    <h2><i class="fa-solid fa-paw"></i> Registrar Nueva Mascota</h2>

    <form action="{{ route('pets.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label>Nombre:</label>
            <input type="text" name="name" placeholder="Ej. Toby" required>
        </div>

        <div class="form-group">
            <label>Especie:</label>
            <input type="text" name="species" placeholder="Ej. Perro, Gato" required>
        </div>

        <div class="form-group">
            <label>Edad (años):</label>
            <input type="number" name="age" placeholder="Ej. 5" min="0" required>
        </div>

        <button type="submit" class="btn"><i class="fa-solid fa-floppy-disk"></i> Guardar Mascota</button>
        <a href="{{ route('pets.index') }}" class="btn btn-secondary"><i class="fa-solid fa-arrow-left"></i> Volver</a>
    </form>
</div>
@endsection