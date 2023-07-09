<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }
    public function store()
    {
        $this->validate(request(), [
            'name1' => 'required',
            'name2' => 'required',
            'name3' => 'required',
            'passport' => 'required',
            'form' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);
        
        $user = User::create(request(['name1', 'name2', 'name3', 'passport', 'form', 'email', 'password']));
        
        auth()->login($user);
        
        return redirect()->to('/about');
    }
}
