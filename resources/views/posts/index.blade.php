@extends('plantilla')

@section('titol', 'Els meus Projectes')

@section('contingut')
<h1 class="mb-4">Els meus Projectes de GitHub</h1>

<div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach ($projects as $id => $project)
    <div class="col">
        <div class="card h-100 shadow-sm">
            <img src="{{ $project['image'] }}" class="card-img-top" alt="{{ $project['title'] }}">
            <div class="card-body">
                <h5 class="card-title">{{ $project['title'] }}</h5>
                <p class="card-text">{{ $project['description'] }}</p>
            </div>
            <div class="card-footer bg-transparent border-top-0">
                <a href="{{ route('posts.show', $id) }}" class="btn btn-primary w-100">Veure Detalls</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection