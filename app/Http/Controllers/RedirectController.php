<?php

namespace cyb\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Auth;
use cyb\Http\Requests;
use cyb\Http\Controllers\Controller;

class RedirectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function login()
    {
        if (Auth::user()->hasRole('Default')) {

            return redirect()->action('DefaultController@dashboard');

        };
    }


}
