<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;

class CatalogController extends Controller
{

    public function getIndex() {
        return view('catalog.index', ['arrayPeliculas' => Pelicula::all()]);
    }

    public function getShow($id) {
        return view('catalog.show', ['pelicula' => Pelicula::findOrFail($id), 'id' => $id]);
    }

    public function getCreate() {
        return view('catalog.create');
    }

    public function getEdit($id) {
        return view('catalog.edit', ['pelicula' => Pelicula::findOrFail($id)]);
    }
}
