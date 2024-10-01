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

    function pembimbing_lapangan() {
        return view('admin.pembimbing-lapangan');
    }

    function pembimbing_lembaga() {
        return view('admin.pembimbing-lembaga');
    }

    function pemagang() {
        return view('admin.pemagang');
    }

    function rekap_kehadiran() {
        return view('admin.rekap-kehadiran');
    }
}
