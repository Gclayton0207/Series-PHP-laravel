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
        return view('series.index')->with('series', $series);
    }

    public function create(Request $request)
    {
        return view('series.create');
    }
}
