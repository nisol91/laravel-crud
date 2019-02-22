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
    }
}
