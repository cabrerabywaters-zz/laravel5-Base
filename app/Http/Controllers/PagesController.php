<?php

namespace cyb\Http\Controllers;

use Illuminate\Http\Request;

use cyb\Http\Requests;
use cyb\Http\Controllers\Controller;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function home()
    {
         return view('pages.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function about()
    {
        return view('pages.about');
    }


}
