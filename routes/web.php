<?php

use Illuminate\Support\Facades\Route;

// Dades simulades dels projectes de GitHub
$projects = [
    1 => [
        'title' => 'Traductor Funcional',
        'description' => 'Una aplicació web per a traduir textos utilitzant HTML, CSS i JS.',
        'image' => 'https://picsum.photos/seed/1/600/400',
        'url' => 'https://github.com/marcestruch/Traductor'
    ],
    2 => [
        'title' => 'Pelis_v1',
        'description' => 'Sistema CRUD per a gestionar una col·lecció de videojocs y pelis.',
        'image' => 'https://picsum.photos/seed/4/600/400',
        'url' => 'https://github.com/marcestruch/Pelis_v1'
    ]
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

Route::get('/sobreMi', function () {
    return view('posts.sobreMi');
})->name('SobreMi');