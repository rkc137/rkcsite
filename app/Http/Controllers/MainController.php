<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MainController extends Controller
{
    public function home()
    {
        $users = new User();
        return view('home', ['users' => $users->all()]);
    }
    public function about()
    {
        return view('about');
    }
}
