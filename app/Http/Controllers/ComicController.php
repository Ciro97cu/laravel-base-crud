<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arrayComics = Comic::All();
        $navLink = config('navLink');
        return view("partials.index", compact("arrayComics", "navLink"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $navLink = config('navLink');
        return view("partials.create", compact("navLink"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $newComic = new Comic();
        $newComic->fill($data);
        $newComic->save();
        $comic = $newComic->id;
        return redirect()->route("partials.index", compact("comic"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $arrayComics = Comic::All();
        $comic = Comic::findOrFail($id);
        $navLink = config('navLink');
        return view("partials.show", compact("arrayComics", "comic", "navLink"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $navLink = config('navLink');
        $comic = Comic::findOrFail($id);
        return view("partials.edit", compact("comic", "navLink"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $comic = Comic::findOrFail($id);
        $data = $request->all();
        $comic->fill($data);
        $comic->update();
        return redirect()->route("partials.index", compact("comic"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::find($id);
        $comic->delete();
        return redirect()->route("partials.index");
    }
}
