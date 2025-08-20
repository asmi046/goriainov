<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index() {
        return view('services');
    }

    public function page($slug) {
        $data = Service::where('slug', $slug)->firstOrFail();

        $template = $data->template?$data->template:'default';

        return view($template, ['page' => $data]);
    }
}
