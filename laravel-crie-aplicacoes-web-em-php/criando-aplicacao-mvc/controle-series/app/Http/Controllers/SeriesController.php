<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index ()
    {
        // return redirect('pagina');
        $series = Serie::query()->orderBy('nome')->get();
        return view('series.index')->with('series', $series);
    }

    public function create ()
    {
        return view('series.create');
    }

    public function store (Request $request)
    {
        $nomeSerie = $request->input('nome');
        $serie = new Serie();
        $serie->nome = $nomeSerie;
        $serie->save();

        return redirect('/series');
    }
}
