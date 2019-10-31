<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Genre;

class movieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $peliculas = Movie::all();
      //dd($peliculas);

      $vac = compact('peliculas');
      return view('movies',$vac);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres = Genre::all();
        return view('addmovie', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
      $rules = [
        "titulo" => "string|min:1"

      ];

      $messages = [
        "string" => "El campo :attribute debe ser texto.",
        "min" => "El campo :attribute debe tener al menos :min carateres."
      ];

      $this->validate($req, $rules, $messages); //Si validamos tenemos que mostrar los errores al usuario.

      $ruta = $req->file('image')->store('public/img'); //Guarda la imagen en el filesistem
      $nombreImg = basename($ruta);

      $pelicula = new Movie();

      $pelicula->title = $req['titulo'];
      $pelicula->awards = $req['awards'];
      $pelicula->rating = $req['rating'];
      $pelicula->release_date = $req['release_date'];
      $pelicula->length = $req['length'];
      $pelicula->genre_id = $req['genre'];
      $pelicula->image = $nombreImg; //El que nos da laravel

      $pelicula->save();

      return redirect('movies');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pelicula = Movie::find($id);
        //$pelicula = Movie::where("id", "=", $id)->get()->first();

        //dd($pelicula);
        $vac = compact('pelicula');
        return view('movie', $vac);
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

    public function miFuncion(){

    }
}
