<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\App;
// use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index() {
        return view('admin.index');
    }
}
