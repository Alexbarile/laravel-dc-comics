<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// richiamo il VALIDATOR per funzione Validation

use Illuminate\Support\Facades\Validator;

// richiamo MODEL

use App\Models\Comic as Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        $icon = config('db.icon');
        $social = config('db.social');
        return view('comics.index', compact('comics', 'icon', 'social'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $icon = config('db.icon');
        $social = config('db.social');
        return view('comics.create', compact('icon','social'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $this->validation($request->all());

        // $data = $request->validate([
        //     'title'=>'required',
        //     'description'=>'required',
        //     'thumb'=>'required',
        //     'price'=>'required',
        //     'series'=>'required',
        //     'type'=>'required',

        // ]
        // );

        $newComic = new Comic();

        // $newComic->title = $data['title'];
        // $newComic->description = $data['description'];
        // $newComic->thumb = $data['thumb'];
        // $newComic->price = $data['price'];
        // $newComic->series = $data['series'];
        // $newComic->type = $data['type'];

        // aggiunto PROTECTED in MODEL

        $newComic->fill($data);
        $newComic->save();
        return redirect()->route('comics.show', ['comic' => $newComic-> id]);
        // il 'comic' fa riferimento alla route del web.php, al singolare

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        $icon = config('db.icon');
        $social = config('db.social');
        return view('comics.show', compact('comic', 'icon', 'social'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);
        $icon = config('db.icon');
        $social = config('db.social');
        return view('comics.edit', compact('comic', 'icon', 'social'));
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
        $data = $this->validation($request->all());

        // $data = $request->validate([
        //     'title'=>'required',
        //     'description'=>'required',
        //     'thumb'=>'required',
        //     'price'=>'required',
        //     'series'=>'required',
        //     'type'=>'required',

        // ]);
       
        $comic->update($data);
        return redirect()->route('comics.show', ['comic' => $comic-> id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);
        $comic->delete();
        return redirect()->route('comics.index');
    }

    // Funzione per Validare i dati al momento del Form

    private function validation($data){
        $validator = Validator::make($data, [
            'title'=>'required',
            'description'=>'required|max:600',
            'thumb'=>'required',
            'price'=>'required',
            'series'=>'required',
            'type'=>'required',
        ],
        [
            'title.required'=> 'Il titolo è obbligatorio',
            'description.required'=>'La descrizione è obbligatoria',
            'description.max'=>'La descrizione non può essere superiore a :max caratteri',
            'thumb.required'=>'La foto è obbligatoria',
            'price.required'=>'Il prezzo è obbligatorio',
            'series.required'=>'La serie è obbligatoria',
            'type.required'=>'Il tipo è obbligatorio',
        ])->validate();

        return $validator;
    }
}
