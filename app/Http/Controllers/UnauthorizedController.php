<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnauthorizedController extends Controller
{
    function index() {
        return view('auth.unauthorized');
    }
}
