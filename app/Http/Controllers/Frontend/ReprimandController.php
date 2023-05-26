<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReprimandController extends Controller
{
    public function index(Request $request)
    {
        return view('Frontend.Pages.Reprimand.index');
    }

    public function store(Request $request)
    {
        return $request->all();
    }
}
