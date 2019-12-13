<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    /**
     * Show the application homepage.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the application teaching material.
     *
     * @return \Illuminate\Http\Response
     */
    public function lesmateriaal()
    {
        return view('lesmateriaal');
    }

    /**
     * Show the application videos.
     *
     * @return \Illuminate\Http\Response
     */
    public function videos()
    {
        return view('videos');
    }

    /**
     * Show the application about page.
     *
     * @return \Illuminate\Http\Response
     */
    public function over()
    {
        return view('over');
    }

    /**
     * Show the application dillema sub-app.
     *
     * @return \Illuminate\Http\Response
     */
    public function dilemma()
    {
        return view('dilemma');
    }

    /**
     * Show the application contact page.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('contact');
    }
}
