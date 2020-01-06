<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('client.pages.home');
    }
    public function countries()
    {
        return view('client.pages.countries');
    }
}
