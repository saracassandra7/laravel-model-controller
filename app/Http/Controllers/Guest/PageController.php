<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $movies = Movie::all();
        //dd($movies);

        return view('home', compact('movies'));
    }

    public function about(){
        return view('about');
    }

    public function contacts(){

        $contactsList = ['arum quo distinctio', 'maxime cupiditate', 'veniam iure illum perferendis', 'corporis excepturi id', 'cum repudiandae omnis', 'reiciendis aliquid'];
        return view('contacts', compact('contactsList'));
    }
}
