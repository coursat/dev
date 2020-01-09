<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {

        $title = "الرئيسية";
        $meta_info = array
        (
            'title' =>$title,
            'is_home_page' => true
        );
        return view('client.pages.home')->with('meta', $meta_info);
    }
    public function countries()
    {
        return view('client.pages.countries');
    }
}
