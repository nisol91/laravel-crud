<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mountain;

class HomeController extends Controller
{

    public function index()
    {
        $montagne = Mountain::all();

        $data = [
            'title' => 'Home',
        ];

        return view('home', $data, compact('montagne'));
        //compact va bene per singola variabile, mentre per array meglio passarlo come qui ho passato $data
    }
}
