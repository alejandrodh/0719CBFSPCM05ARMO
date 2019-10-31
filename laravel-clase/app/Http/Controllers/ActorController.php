<?php

namespace App\Http\Controllers;

use App\Actor;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    public function directory()
    {
      $actores = Actor::all();
      //Si queremos toda la lista de actores paginada:
      //$actores = Actor::paginate(10);

      return view('actors', compact('actores'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $actor = Actor::find($id);

        return view('actor', compact('actor'));
    }

    public function search()
    {
      $search = "%" .$_GET['search']. "%";
      $actores = Actor::where('first_name', 'like', $search )
      ->orwhere('last_name', 'like', $search )
      ->paginate(5); //Devuelve actores paginados de a 5.

      //Mantiene la query string dentro del paginado.
      $actores->withPath('?search='.$_GET['search']);

      return view('actors', compact('actores'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function edit(Actor $actor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actor $actor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actor $actor)
    {
        //
    }
}
