<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class PageController extends Controller

{
    public function home() {
        return view('pages.home');
    }
    public function comparison() {
        return view('pages.comparison');
    }
    public function evosound() {
        return view('pages.evosound');
    }
    public function bar() {
        return view('pages.bar');
    }
    public function bar_specification() {
        return view('pages.bar-specification');
    }
    public function sphere() {
        return view('pages.sphere');
    }

    public function sitemap()
    {
        define('BASE_URL', url('/'));

        return response()->view('sitemap')->header('Content-Type', 'text/xml');
    }
}
