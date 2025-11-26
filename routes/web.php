<?php

use Illuminate\Support\Facades\Route;

// Dades simulades dels projectes de GitHub
$projects = [
    1 => [
        'title' => 'Traductor Funcional',
        'description' => 'Una aplicació web per a traduir textos utilitzant HTML, CSS i JS.',
        'image' => 'https://picsum.photos/seed/1/600/400',
        'url' => '#'
    ],
    2 => [
        'title' => 'Exercicis Flexbox',
        'description' => 'Col·lecció d\'exercicis per a dominar el disseny amb Flexbox.',
        'image' => 'https://picsum.photos/seed/2/600/400',
        'url' => '#'
    ],
    3 => [
        'title' => 'Laravel Blog',
        'description' => 'Aquest mateix blog, desenvolupat amb Laravel i Bootstrap.',
        'image' => 'https://picsum.photos/seed/3/600/400',
        'url' => '#'
    ],
    4 => [
        'title' => 'Gestió de Jocs',
        'description' => 'Sistema CRUD per a gestionar una col·lecció de videojocs.',
        'image' => 'https://picsum.photos/seed/4/600/400',
        'url' => '#'
    ],
];

Route::get('/', function () {
    return view('inici');
})->name('inici');

Route::get('/posts', function () use ($projects) {
    return view('posts.llistat', ['projects' => $projects]);
})->name('posts_llistat');

Route::get('/posts/{id}', function ($id) use ($projects) {
    if (!array_key_exists($id, $projects)) {
        abort(404);
    }
    return view('posts.fitxa', ['project' => $projects[$id], 'id' => $id]);
})->where('id', '[0-9]+')->name('posts_fitxa');
