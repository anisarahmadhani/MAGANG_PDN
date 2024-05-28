<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class LoginController extends Controller
{
    public function index() {
        $data['cahce'] = Cache::get('remember');
        
        return view('frontend.auth.login');
    }
}
