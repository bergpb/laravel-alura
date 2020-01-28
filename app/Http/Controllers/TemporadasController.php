<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Serie;

class TemporadasController extends Controller
{
    public function index(int $serieId) {
        $temporada = Serie::find($serieId->temporadas);

        return view('temporadas.index', compact($temporada));
    }
}
