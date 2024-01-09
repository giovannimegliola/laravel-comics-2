<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
//use Illuminate\View\View;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View;
     */
    public function index()
    {
        $comics = Comic::all();
        return view("comics.index", compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View;
     */
    public function create()
    {
        //inserire nuovo comic nel db
        return view('comics.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View;
     */
    public function store(Request $request)
    {
        $formData = $request->all();
        $new_comic = new Comic();
        $new_comic->title = $formData['title'];
        $new_comic->description = $formData['description'];
        $new_comic->thumb = $formData['thumb'];
        $new_comic->price = $formData['price'];
        $new_comic->sale_date = $formData['sale_date'];
        $new_comic->series = $formData['series'];
        $new_comic->type = $formData['type'];
        $new_comic->save();
        //dd($request->all());

        return to_route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\View\View;
     */
    public function show(Comic $comic)
    {
        return view("comics.show", compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     *
     */
    public function edit(Comic $comic)
    {
        //
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     *
     */
    public function update(Request $request, Comic $comic)
    {

        $formData = $request->all();
        $comic->title = $formData['title'];
        $comic->description = $formData['description'];
        $comic->thumb = $formData['thumb'];
        $comic->price = $formData['price'];
        $comic->sale_date = $formData['sale_date'];
        $comic->series = $formData['series'];
        $comic->type = $formData['type'];

        $comic->update();

        return to_route('comics.show', $comic->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     *
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return to_route('comics.index');
    }
}
