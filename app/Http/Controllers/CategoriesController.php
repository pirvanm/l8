<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// include datele din model , recunoaste clasa Categories ca fiind clasa
// ce preia datele din tabel
use Illuminate\Support\Facades\DB;
use App\Models\Categories;
use Illuminate\Support\Facades\Redis;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $r)
    {

    
        $Categorii = Categories::get();

        // cod pregatit pentru frotend(blade- ul de laravel);

        //folder.fisier 
        return view('categories.index');
   //  return view('categories.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $newEntry = Categories::create(
        //     [
        //         'id' => 99,
        //          'name' => 'O poveste',
        //          'categori_id' => 22,
        //          'game_id' => 44
        //     ]
        //     );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
dd('store');
   
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

        // a doua modalitate de inserare in baza de date

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

    
        Categories::where('id', 2)
        ->update(['name' => 'actualizat']);
         
        
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
        dd('buna sunt update');
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
