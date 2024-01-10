<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;

use Illuminate\View\View;

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
     *
     */
    public function store(StoreComicRequest $request)
    {

        // $request->validate([
        //     'title' => 'required|min:5|max:255|unique:comics',
        //     'type' => 'required',
        //     'description' => 'required',
        //     'price' => 'required',
        //     'thumb' => 'url',

        // ]);    //validazione backend

        //$formData = $this->validation($request->all()); //prendo i dati del form dalla request


        //$new_comic = new Comic();    //creo nuovo comic
        //$new_comic->fill($formData); //assegnp i valori del form al nuovo comic
        //$new_comic->save(); //salvo il nuovo prodotto
        $formData = $request->validated();
        $new_comic = Comic::create($formData); //riassume i 3 step precedenti

        return to_route('comics.show', $new_comic->id); //reindirizzo alla pagina del nuovo prodotto appena creato
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
    public function update(UpdateComicRequest $request, Comic $comic)
    {

        //$formData = $request->all();
        //$formData = $this->validation($request->all());

        // $comic->title = $formData['title'];
        // $comic->description = $formData['description'];
        // $comic->thumb = $formData['thumb'];
        // $comic->price = $formData['price'];
        // $comic->sale_date = $formData['sale_date'];
        // $comic->series = $formData['series'];
        // $comic->type = $formData['type'];

        $formData = $request->validated();
        $comic->fill($formData);


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
        return to_route('comics.index')->with('message', "Il fumetto $comic->title è stato eliminato");
    }


    /**
     * Summary of validation
     *
     */
    // private function validation($data)
    // {
    //     $validator = Validator::make($data, [

    //         'title' => 'required|min:5|max:255|unique:comics',
    //         'type' => 'required',
    //         'description' => 'required',
    //         'price' => 'required',
    //         'thumb' => 'url',

    //     ],[
    //         'title.required' => 'il campo titolo è obbligatorio',
    //         'title.min' => 'il campo titolo deve avere almeno :min caratteri',
    //         'title.max' => 'il campo titolo deve avere almeno :max caratteri',
    //         'type.required' => 'il campo tipo è obbligatorio',
    //         //specifica restanti messaggi di errore

    //     ])->validate();
    //     return $validator;

    // }
}
