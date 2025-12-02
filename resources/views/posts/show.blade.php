@extends('plantilla')

@section('titol', $project['title'])

@section('contingut')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('inici') }}">Inici</a></li>
        <li class="breadcrumb-item"><a href="{{ route('posts.index') }}">Projectes</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ $project['title'] }}</li>
    </ol>
</nav>

<div class="card mb-3">
    <img src="{{ $project['image'] }}" class="card-img-top" alt="{{ $project['title'] }}" style="max-height: 400px; object-fit: cover;">
    <div class="card-body">
        <h1 class="card-title">{{ $project['title'] }}</h1>
        <p class="card-text lead">{{ $project['description'] }}</p>
        <p class="card-text">
            <small class="text-muted">ID del Projecte: {{ $id }}</small>
        </p>
        <hr>
        <h3>Detalls del Projecte</h3>
        <p>Aquí aniria una descripció més detallada del projecte, les tecnologies utilitzades, reptes superats, etc.</p>

        <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-4">
            <a href="{{ $project['url'] }}" class="btn btn-dark me-md-2" target="_blank">Veure a GitHub</a>
            <a href="{{ route('posts.index') }}" class="btn btn-outline-secondary">Tornar al llistat</a>
        </div>
    </div>
</div>
@endsection