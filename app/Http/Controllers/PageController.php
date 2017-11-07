<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function getIndex()
    {

    }

    public function getAdminIndex()
    {
        return view('admin.index');
    }
}
