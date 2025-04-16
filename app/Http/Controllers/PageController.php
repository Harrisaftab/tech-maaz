<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('pages.frontend.home');
    }

    public function about() {
        return view('pages.frontend.about');
    }

    public function services() {
        return view('pages.frontend.services');
    }

    public function blog() {
        return view('pages.frontend.blog.index');
    }

    public function contact() {
        return view('pages.frontend.contact');
    }
}
