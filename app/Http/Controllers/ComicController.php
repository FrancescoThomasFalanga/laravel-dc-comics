<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

        return view('comics/index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('comics/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validation($request);
        
        $form_data = $request->all();

        $form_data['price'] = '$' . number_format($form_data['price'], 2);

        $newComic = new Comic();

        // $comic->title = $$form_data['title'];
        // $comic->description = $$form_data['description'];
        // $comic->thumb = $$form_data['thumb'];
        // $comic->price = $$form_data['price'];
        // $comic->series = $$form_data['series'];
        // $comic->sale_date = $$form_data['sale_date'];
        // $comic->type = $form_data['type'];
        // $comic->artists = $form_data['artists'];
        // $comic->writers = $form_data['writers'];

        $newComic->fill($form_data);

        $newComic->save();

        return redirect()->route('comics.show', $newComic->id);

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics/show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics/edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {

        $this->validation($request);

        $form_data = $request->all();

        $comic->update($form_data);

        $comic->save();

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }



    private function validation($request) {

        // $request->validate([
        //     'title' => 'required|max:80',
        //     'description' => 'required',
        //     'thumb' => 'required',
        //     'price' => 'required|max:8|min:4',
        //     'series' => 'required|max:100',
        //     'sale_date' => 'required|date_format:d/m/Y|max:10',
        //     'type' => 'required|max:50|min:5',
        //     'artists' => 'required',
        //     'writers' => 'required|',
        // ]);


        $form_data = $request->all();

        // VALIDATION ITAS
        $validator = Validator::make($form_data, [
            'title' => 'required|max:80',
            'description' => 'required',
            'thumb' => 'required',
            'price' => 'required|max:8|min:4',
            'series' => 'required|max:100',
            'sale_date' => 'required|date_format:d/m/Y|max:10',
            'type' => 'required|max:50|min:5',
            'artists' => 'required',
            'writers' => 'required|',
        ], [
            'title.required' => 'Il campo Title è obbligatorio',
            'title.max' => 'Puoi inserire al massimo 80 Caratteri',
            'description.required' => 'Il campo Description è obbligatorio',
            'thumb.required' => 'Il campo Thumb è obbligatorio',
            'price.required' => 'Il campo Price è obbligatorio',
            'price.max' => 'Puoi inserire al massimo 8 Caratteri',
            'price.min' => 'Il campo Price richiede un minimo di 4 Caratteri',
            'series.required' => 'Il campo Series è obbligatorio',
            'series.max' => 'Puoi inserire al massimo 100 Caratteri',
            'sale_date.required' => 'Il campo Sale Date è obbligatorio',
            'sale_date.date_format' => 'Il formato inserito non è corretto, il formato corretto è GG/MM/AAAA',
            'sale_date.max' => 'Credo proprio non esista un anno del genere, non al momento, almeno',
            'type.required' => 'Il campo Type è obbligatorio',
            'type.max' => 'Puoi inserire al massimo 50 Caratteri',
            'type.min' => 'Il campo Type richiede un minimo di 5 Caratteri',
            'artists.required' => 'Il campo Artists è obbligatorio',
            'writers.required' => 'Il campo Writers è obbligatorio',
            
        ])->validate();

        return $validator;

    }
}
