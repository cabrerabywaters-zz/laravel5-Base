<?php

namespace cyb\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Auth;
use cyb\Http\Requests;
use cyb\Http\Controllers\Controller;
use cyb\Company;
use cyb\User;


class RedirectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function login()
    {


        $company = Auth::user()->company_id;
        $user = Auth::user()->id;

        if (Auth::user()->hasRole('Owner')) {

            return redirect()->route('owner.dashboard', [$company]);

        } else {
            return redirect()->route('company.dashboard', [$company]);
        }


    }

    public function dashboard($company)
    {
        if (Auth::user()->hasRole('Default')) {

            return view('default.dashboard');

        } elseif (Auth::user()->hasRole('Owner')) {

            return view('owner.dashboard');

        }


    }


}
