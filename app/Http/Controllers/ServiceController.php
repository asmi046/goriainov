<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index() {
        return view('services');
    }

    public function page($slug) {
        $data = Product::where('slug', $slug)->firstOrFail();

        $template = $data->template?$data->template:'default';

        return view($template, ['page' => $data]);
    }
}
