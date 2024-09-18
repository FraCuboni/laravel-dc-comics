<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller

{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $comics = Comic::all();
        return view('comics.create', compact('comics'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dump('store');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Trova il fumetto con l'ID specificato
        $comic = Comic::find($id);

        // Verifica se il fumetto esiste
        if ($comic === null) {
            // Se il fumetto non viene trovato, restituisce un errore 404 o reindirizza a una pagina
            abort(404, 'Fumetto non trovato');
        }

        // Restituisce la vista 'comics.show' con il singolo fumetto
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
