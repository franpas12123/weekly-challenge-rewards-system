<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('user/index', ['users' => $users]);
    }
    
    public function create()
    {
        // Get countries using API
        return view('user/create');
    }

    
    public function show($id)
    {
        // $id = request('id');
        $user = User::findOrFail($id);

        return view('user/show', ['user' => $user]);
    }

    public function store()
    {
        $user = new User();

        $user->name = request('name');
        $user->email = request('email');
        $user->password = request('password');
        $user->country = request('country');
        $user->occupation = request('occupation');
        $user->about = request('about');
        $user->website = request('website');

        $user->save();

        return redirect('/')->with('msg', 'Registered! You can now login.');
    }
}
