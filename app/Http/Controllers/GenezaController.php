<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GenezaController extends Controller
{

    public function lista () {
        //dd('sunt o poezie');
        /// scriu un query builder care sa imi afiseze
        // utilizatorii 

        // get preia 
        $users = DB::table('users')
        ->get();

        // return afiseaza

        return $users;

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $games = DB::table('games')
        ->get();

        // get te ajuta sa transformi datele 
        // intr-un array(forma organizate de 
        // date )

        //o colecti...

        // forteaza afisarea informatilor 
        // dintr-o variabila care 
        // ulterior este asignata cu o clasa
        //dd($games);

        return $games;

    // return 'aici au inceput timpurilleee...'; 
    }

    public function index2() {
        return 'metoda definita de mine , dupa bunul plac
        l-am faucut si pe aladin';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // dd('dau viata si la nepotiii');

       // daca nu stici care sunt coloanele...
       // le intrebati care sunt cu ...

       //$games = DB::table('games')
        // ->first();

        //dd ('coloanele sunt aici' , $games);
       DB::table('games')
       ->insert([
        ['name' => 'picard@example.com', 
        'categori_id' => 6,'game_id' => 5],

        //faceti un insert pentru a adauga 
        // in tabele user 
        
    ]);

    return 'am salvat datele si sunt mandru de mie...';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        dd('aaa', $id);
        // folosim first pentru a vedea care sunt coloanele  sau cheiele 
        // ce ne trebuie pentru a stii ce actualizam
        // $games = DB::table('games')
        // ->first();

        // dd($games, 'coloanele sunt');

        // first ia prima interogare 


        // folosim get pentru a lua toate interograrile din tabele games
        // $games =$games = DB::table('games')
        //  ->get();

         // cand imi mysql si vreau sa vorbesc ... cu el
        //  $games =$games = DB::table('games')
        //  //->toSql();
        //  ->get();

         // actuaalizare

        // $games =  DB::table('games')
        //         ->where('categori_id', 1)
        //         ->update(['name' => 'numele meu e mai frumos acum']);
        // pe baza acestui examplu stergeti userul 2
    //   $games=DB::table('users')
    //    // ->where('id', 2)
    //     ->where('name','asda')
    //     ->delete();

           // return 1 ;
          //  return 2 ;
        //dd($games, 'tu esti petrecerea');
      //  dd('tu esti petrecerea?');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        dd('ruta de editare');
        $games = 
        $affected = DB::table('users')
              ->where('id',  $id)
              ->update(['votes' => 1]);
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
