<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = [
            'Punisher',
            'Lost',
            'Loki',
            'Cobra Kai'
        ];
        return view('listar-series', compact('series'));
    }
}
