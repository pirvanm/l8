<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// include datele din model , recunoaste clasa Categories ca fiind clasa
// ce preia datele din tabel
use Illuminate\Support\Facades\DB;
use App\Models\Categories;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //varianta cu mode,
         $categories = Categories::get();
        //     dd('sunt aici ?',$categories);
        // // varianta Query Builder
        // $games = DB::table('categories')
        // // in loc de games punem numele unui tabel din baza noastra de data
        // ->get();

        // dd("query builder way", $games);


        //Query BUilder vs Model
     
// QUery Builder
        $categories = DB::table('categories')
        ->get();
// Model
        $categories = Categories::get();

        // folosesc return pentru a afisa contintul unei variabile
        return $categories;

        // detalii despre 
       // https://stackoverflow.com/questions/38391710/laravel-eloquent-vs-query-builder-why-use-eloquent-to-decrease-performance

     return view('categories.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        dd('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newCat = new Categories;
        // in clasa Categories cream un nou obiect
        // in obiectul curent  pentru:
        $newCat->id = 6;
        // propietate id, atribuit valoarea 6
        $newCat->name = 'Un alt nume';
      //  propietate name, atribuit valoarea 'Un alt nume';
        $newCat->categori_id = 7;
        $newCat->game_id = 9;
// pentru a salva valorile de mai sus pentru
// propietatile de mai sus folosim :
        $newCat->save();
        // save () pentru a salva in tabela
        // ce este legat la aceasta varabila
        // la aceasta variabila
        // fiind legata clasa, modelul
        // categories
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
