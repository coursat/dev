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
        return view('visitor.pages.home')->with('meta', $meta_info);
    }
    public function search()
    {
        $title = "Courses";
        $meta_info = array
        (
            'title' =>$title
        );
        return view('visitor.pages.search')->with('meta', $meta_info);;
    }
    public function academy()
    {
        $title = "academy";
        $meta_info = array
        (
            'title' =>$title
        );
        return view('visitor.pages.academy')->with('meta', $meta_info);;
    }
    public function course()
    {
        $title = "Course";
        $meta_info = array
        (
            'title' =>$title
        );
        return view('visitor.pages.course')->with('meta', $meta_info);;
    }
    public function about()
    {
        $title = "about";
        $meta_info = array
        (
            'title' =>$title
        );
        return view('visitor.pages.about')->with('meta', $meta_info);;
    }

}
