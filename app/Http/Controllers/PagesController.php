<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'Home';
        return view('pages.index', compact('title'));
    }

    public function about() {
        $title = 'About Us';
        return view('pages.about', compact('title'));
    }

    public function services() {
        $title = 'Services';
        $services = ['Design', 'Web Dev', 'Laravel'];

        $data = [
          'title' => $title,
          'services' => $services
        ];

        return view('pages.services')->with($data);
    }
}
