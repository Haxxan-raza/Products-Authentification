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
        $admins = User::where('type', 1)->get();
        return view('admin.dashboard', compact('admins'));
    }

}
