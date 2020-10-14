<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Challenge;
use Illuminate\Support\Facades\Auth;

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

    public function badges()
    {
        $challenges = Challenge::all();
        $user_points = User::select('points')->where('id', Auth::id())->first();

        foreach ($user_points as $user_point ) {
            // if()
        }

        return view('user/mybadges', ['challenges', $challenges]);
    }
}
