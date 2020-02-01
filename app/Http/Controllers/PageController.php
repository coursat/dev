<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {

        $title = "Home";
        $meta_info = array
        (
            'title' =>$title,
            'is_home_page' => true,
        );
        return view('client.pages.home')->with('meta', $meta_info);
    }
    public function countries()
    {
        $title = "Countries";
        $meta_info = array
        (
            'title' =>$title
        );
        return view('client.pages.countries')->with('meta', $meta_info);;
    }
    public function search()
    {
        $title = "Courses";
        $meta_info = array
        (
            'title' =>$title
        );
        return view('client.pages.search')->with('meta', $meta_info);;
    }
    public function academy()
    {
        $title = "academy";
        $meta_info = array
        (
            'title' =>$title
        );
        return view('client.pages.academy')->with('meta', $meta_info);;
    }

}
