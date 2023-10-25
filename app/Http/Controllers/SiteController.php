<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('modal')) {
            if ($request->modal == 'login') {
                session()->flash('show_login_modal');
            } else if ($request->modal == 'register') {
                session()->flash('show_register_modal');
            }
        }

        return view('home');
    }
}
