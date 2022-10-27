<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontpageController extends Controller
{
    public function index(){
        return view('pages.frontpages.index');
    }
    public function teori(){
        return view('pages.frontpages.teori');
    }
    public function penerapan(){
        return view('pages.frontpages.penerapan');
    }
    public function langkah(){
        return view('pages.frontpages.langkah');
    }
    public function studiKasus(){
        return view('pages.frontpages.studi-kasus');
    }
    public function lainnya(){
        return view('pages.frontpages.lainnya');
    }
}
