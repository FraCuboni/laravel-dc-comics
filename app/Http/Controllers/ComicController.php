<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use Illuminate\Support\Facades\Log;

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
        $data = $request->all();
        Log::debug("data", $data);
        // creo dato da aggiungere nel db
        $comic = new Comic;

        $comic->fill($data);
        // assegno valori al dato
        // $comic->title = $data['title'];
        // $comic->series = $data['series'];
        // $comic->description = $data['description'];
        // $comic->price = $data['price'];
        // $comic->img = $data['img'];

        // salvo
        $comic->save();
        return redirect()->route('comics.show', $comic->id);
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
        $comic = Comic::find($id);
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $comic = Comic::find($id);

        $comic->update($data);

        return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
