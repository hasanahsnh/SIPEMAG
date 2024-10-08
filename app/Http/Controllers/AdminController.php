<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /*function index() {
        return view('admin.layouts.header');
    }*/

    function index() {
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

    function rekaphadir() {
        return view('admin.rekap-kehadiran');
    }

    function sertif() {
        return view('admin.sertifikat');
    }

    function lokasi1() {
        return view('admin.lokasi');
    }

    function tdpembimbing() {
        return view('admin.td-pembimbing');
    }

    function tdpemagang() {
        return view('admin.td-pemagang');
    }
}
