<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class CatalogController extends Controller
{

    public function getIndex() {
        return view('catalog.index', ['arrayPeliculas' => Movie::all()]);
    }

    public function getShow($id) {
        return view('catalog.show', ['pelicula' => Movie::findOrFail($id), 'id' => $id]);
    }

    public function getCreate() {
        return view('catalog.create');
    }

    public function setCreate(Request $r) {
        $movieNew =  new Movie;

        $movieNew['title'] = $r->input('title');
        $movieNew['year'] = $r->input('year');
        $movieNew['director'] = $r->input('director');
        $movieNew['poster'] = $r->input('image');
        $movieNew['synopsis'] = $r->input('synopsis');

        $movieNew->save();

        return redirect()->action('CatalogController@getIndex');
    }

    public function getEdit($id) {
        return view('catalog.edit', ['pelicula' => Movie::findOrFail($id)]);
    }

    public function setEdit(Request $r, $id) {
        $movieEdit = Movie::findOrFail($id);

        $movieEdit['title'] = $r->input('title');
        $movieEdit['year'] = $r->input('year');
        $movieEdit['director'] = $r->input('director');
        $movieEdit['poster'] = $r->input('image');
        $movieEdit['synopsis'] = $r->input('synopsis');

        $movieEdit->save();

        return redirect()->action('CatalogController@getShow', $id)->with('status', 'Has editado la pelicula correctamente');
    }
}
