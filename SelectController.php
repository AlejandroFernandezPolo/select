<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SelectController extends Controller
{
        public function index() {
        return view('select.index');
    }
    
    public function update(Request $request) {
        session(['cities' => $request ->cities]);
        session(['countries' => $request ->countries]);
        return back();
    }
}
