<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GenezaController extends Controller
{
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

       DB::table('games')
       ->insert([
        ['name' => 'picard@example.com', 'categori_id' => 6,'game_id' => 5],
        
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
