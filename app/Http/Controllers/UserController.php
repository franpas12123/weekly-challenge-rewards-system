<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Challenge;
use App\Models\UserChallenge;
use App\Models\Level;
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

    
    public function show($name, $id)
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
        // Get all challenges
        $challenges = Challenge::all();
        // Get user points
        $user = User::select('points', 'level')->where('id', Auth::id())->get();
        // Get user challenges
        $uchallenge_points = UserChallenge::where('id', Auth::id())->get();
        // Get all levels
        $levels = Level::all();

        $points = [];
        foreach ($challenges as $challenge) {
            $cid = $challenge->id;
            $uchallenge = UserChallenge::where('challenge_id', $cid)->first();
            
            // Check if user completed the challenge
            if($uchallenge != null) {
                array_push($points, $challenge->points);
            } else {
                array_push($points, 0);
            }
        }

        // Get user status
        $status = $user[0]['level'];
        $total = $user[0]['points'];

        return view('user/mybadges', [
            'challenges' => $challenges,
            'status' => $status,
            'total' => $total,
            'points' => $points
            ]);
    }

    public function update(Request $req, $name, $id)
    {
        $user = User::findOrFail($id);

        $user->update([
            'country' => request('country'),
            'occupation' => request('occupation'),
            'about' => request('about'),
            'website' => request('website')
        ]);

        $user->save();

        return view('index');
    }
}
