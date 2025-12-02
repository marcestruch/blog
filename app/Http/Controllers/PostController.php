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

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('posts.index', ['projects' => $this->projects]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return redirect('/');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if (!array_key_exists($id, $this->projects)) {
            abort(404);
        }
        return view('posts.show', ['project' => $this->projects[$id], 'id' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return redirect('/');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
