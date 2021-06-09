<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    /**
     *  MOVIES ARCHIVE
     */
    public function index() {

        // GET MOVIES FROM DATABASE
        $movies = Movie::all();
        //dump($movies);

        return view('movies', compact('movies'));
    }
}
