<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
Use Auth;

class HomeController extends Controller
{
    public function index()
    {
        $directors = User::where('type', 2)->get();
        return view('admin.pages.TestForm', compact('directors'));
    }
}
