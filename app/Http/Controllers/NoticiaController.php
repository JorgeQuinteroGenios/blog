<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('noticias');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**use App\Models\Noticia;
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $noticia = new Noticia();
        $noticia->title       = $request->title;
        $noticia->description = $request->description;
        $noticia->save();
        return redirect('/noticias');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $noticia = Noticia::find($id);
        return $noticia;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Noticia $noticia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Noticia $noticia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Noticia $noticia)
    {
        //
    }
}
