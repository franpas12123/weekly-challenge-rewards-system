<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserChallenge;
use App\Models\Challenge;
use App\Models\User;
use App\Models\Level;

class UserChallengeController extends Controller
{
    
    public function update(Request $req, $user_id, $challenge_id)
    {
        $input = $req->all();
        
        $user_challenge = UserChallenge::where('user_id', $user_id)->where('challenge_id', $challenge_id)->first();
        
        if($req->status === null) {
            $req->status = '';
        }

        UserChallenge::updateOrInsert([
            'user_id' => $user_id,
            'challenge_id' => $challenge_id,
            'status' => $req->status,
            'completed' => 1
        ]);
        // if($user_challenge === null) {
        //     UserChallenge::create([
        //         'user_id' => $user_id,
        //         'challenge_id' => $challenge_id,
        //         'status' => '',
        //         'completed' => 1
        //         ]);
        // } else {
        //     if($req->status === null) {
        //         $req->status = '';
        //     }
        //     $user_challenge->update([
        //         'status' => $req->status,
        //         'completed' => 1
        //         ]);
        //     $user_challenge->save();
        // }
        
        // Get points of the challenge
        $challenge = Challenge::where('id', $challenge_id)->first();
        
        // Update user points
        $user = User::where('id', $user_id)->first();
        $points = intval($user->points) + intval($challenge->points);
        
        $user->update([
            'points' => $points
            ]);
        
        // Update user level
        $user_points = User::select('points', 'level')->where('id', Auth::id())->get();
        $levels = Level::all();
        $status = $user_points[0]['level'];
        $total = $user_points[0]['points'];
        foreach ($levels as $level) {
            if($total >= $level->points) {
                $status = $level->name;
            } else {
                break;
            }
        }

        $user->update([
            'level' => $status
            ]);

        error_log('update: '.$user->level);
        return redirect()->route('challenges.index')->with('msg','Challenge status updated!');
    }

    public function store() {
        $user_challenge = new UserChallenge;

        $user_challenge->user_id = request('user_id');
        $user_challenge->challenge_id = request('challenge_id');
        $user_challenge->status = request('status');
        $user_challenge->completed = request('completed');

        $challenge->save();
        
        return redirect()->route('challenges.index')->with('msg','Challenge status created!');
    }
}
