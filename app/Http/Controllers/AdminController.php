<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index() {
        return view('admin.layouts.header');
    }

    function home() {
        return view('admin.home');
    }

    function pemlap() {
        return view('admin.pembimbing-lapangan');
    }

    function pembaga() {
        return view('admin.pembimbing-lembaga');
    }

    function magang() {
        return view('admin.pemagang');
    }

    function hadir() {
        return view('admin.kehadiran');
    }
}
