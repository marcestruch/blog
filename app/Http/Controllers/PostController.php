<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    private $projects = [
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

    public function index()
    {
        return view('posts.llistat', ['projects' => $this->projects]);
    }

    public function show($id)
    {
        if (!array_key_exists($id, $this->projects)) {
            abort(404);
        }

        return view('posts.fitxa', ['project' => $this->projects[$id], 'id' => $id]);
    }
}
