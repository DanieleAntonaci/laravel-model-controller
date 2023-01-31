<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\movies;

class MainController extends Controller
{
    public function index() {
        $movies= movies::all();
        $data= [
            'movies'=> $movies
        ];
        return view('pages.app', $data);
    }
}
