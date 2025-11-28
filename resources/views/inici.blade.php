@extends('plantilla')

@section('titol', 'Inici - Marc Estruch')

@section('contingut')
<div class="p-5 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Benvingut al meu Portfoli</h1>
        <p class="col-md-8 fs-4">Hola! Sóc Marc, i aquest és el meu blog personal on compartixc els meus projectes de desenvolupament web, experiments amb Laravel, i molt més.</p>
        <a href="{{ route('posts_llistat') }}" class="btn btn-primary btn-lg" type="button">Veure Projectes</a>
        <a href="https://github.com/marcestruch" target="_blank" class="btn btn-dark btn-lg" type="button"><i class="bi bi-github"></i> El meu GitHub</a>
    </div>
</div>

<div class="row align-items-md-stretch">
    <div class="col-md-6">
        <div class="h-100 p-5 text-white bg-dark rounded-3">
            <h2>Sobre mi</h2>
            <p>M'apassiona la tecnologia i el desenvolupament. Estic constantment aprenent noves eines i frameworks per millorar les meves habilitats.</p>
            <a href="{{ route('SobreMi') }}" class="btn btn-primary btn-lg" type="button">Sobre mi</a>
        </div>
    </div>
    <div class="col-md-6">
        <div class="h-100 p-5 bg-light border rounded-3">
            <h2>Últims avenços</h2>
            <p>Actualment estic treballant en aprofundir els meus coneixements sobre Laravel 11 i l'ecosistema de PHP modern.</p>
            <a href="{{ route('SobreMi') }}" class="btn btn-primary btn-lg" type="button">Sobre mi</a>
        </div>
    </div>
</div>
@endsection