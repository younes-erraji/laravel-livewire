<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CountriesController extends Controller
{
    function countries() {
        return view('countries');
    }

    function index() {
        return view('index');
    }
}
