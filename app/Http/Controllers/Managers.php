<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Managers extends Controller
{
    public function dashboard()
    {
        $title = "Dashboard";
        $meta_info = array
        (
            'title' =>$title
        );
        return view('managers.dashboard.index')->with('meta', $meta_info);
    }
}
