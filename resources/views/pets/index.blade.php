@extends('layouts.app')

@section('title', 'Listado de Mascotas')

@section('content')
<div class="card">
    <h2><i class="fa-solid fa-list"></i> Directorio de Mascotas</h2>

    @if(session('success'))
        <div class="alert-success">
            <i class="fa-solid fa-check-circle"></i> {{ session('success') }}
        </div>
    @endif

    <div class="actions">
        <a href="{{ route('pets.create') }}" class="btn"><i class="fa-solid fa-plus"></i> Registrar Nueva Mascota</a>
    </div>

    <form action="{{ route('pets.index') }}" method="GET" class="search-form">
        <input type="text" name="search" placeholder="Buscar por nombre..." value="{{ request('search') }}">
        <button type="submit" class="btn"><i class="fa-solid fa-search"></i> Buscar</button>
        @if(request('search'))
            <a href="{{ route('pets.index') }}" class="btn btn-secondary"><i class="fa-solid fa-times"></i> Limpiar</a>
        @endif
    </form>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Especie</th>
                <th>Edad</th>
            </tr>
        </thead>
        <tbody>
            @forelse($pets as $pet)
                <tr>
                    <td>{{ $pet->id }}</td>
                    <td>{{ $pet->name }}</td>
                    <td>{{ $pet->species }}</td>
                    <td>{{ $pet->age }} años</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No hay mascotas registradas.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="pagination">
        {{ $pets->links() }}
    </div>
</div>
@endsection