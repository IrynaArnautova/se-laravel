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
    public function karaoke_sets() {
        return view('pages.karaoke-sets');
    }
    public function karaoke_set_mic() {
        return view('pages.karaoke-set_mic');
    }
    public function karaoke_set_evosound() {
        return view('pages.karaoke-set_evosound');
    }
    public function karaoke_set_acoustic() {
        return view('pages.karaoke-set_acoustic');
    }
    public function package_update() {
        return view('pages.package-update');
    }
    public function premium() {
        return view('pages.premium');
    }

    public function sitemap()
    {
        define('BASE_URL', url('/'));

        return response()->view('sitemap')->header('Content-Type', 'text/xml');
    }
}
