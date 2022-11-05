<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DettailMovieController extends Controller
{
    public function index(Request $request)
    {
        $requestid = $request->input('id');
        $comics = config('data.comics');
        $comic = $comics[$requestid];
        return view('movieDettails', compact('comic'));
    }
}
