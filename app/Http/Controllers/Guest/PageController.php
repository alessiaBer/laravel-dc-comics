<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function comics()
    {
        $comics = Comic::all();
        dd($comics);
        return view('comics', compact('comics'));
    }
}
