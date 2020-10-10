<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Challenge;
use App\Models\UserChallenge;

class ChallengeController extends Controller
{
    public function index() {
        $challenges = Challenge::all();
        
        if(Auth::user()) {
            $challenges_id = Challenge::select('id')->get();

            $user_id = Auth::id();
            
            // Get user challenges
            $user_challenges = UserChallenge::where('user_id', $user_id);
            
            $user_challenge_id = UserChallenge::select('challenge_id', 'status')->where('user_id', $user_id)->where('completed', 1)->get();
            $ids = UserChallenge::select('id')->where('user_id', $user_id)->get();
            
            $completed = [];
            
            // Get all completed challenge id
            foreach($user_challenge_id as $c_id) {
                array_push($completed, $c_id["challenge_id"]);
            }
            
            $challenges_status = [];

            foreach($challenges_id as $c) {
                $data = [
                    'id' => $c,
                    'completed' => 0,
                    'status' => ''
                ];

                if(in_array($c->id, $completed)) {
                    $data['completed'] = 1;
                    $status = UserChallenge::select('status')->where('user_id', $user_id)->where('challenge_id', $c->id)->get();
                    foreach ($status as $s) {
                        $data['status'] = $s['status'];
                    }
                }
                array_push($challenges_status, $data);
                // error_log($c);
            }

            $id_array = [];

            foreach ($ids as $id) {
                array_push($id_array, $id);
            }

            // error_log(count($challenges_status));

            // error_log($challenges_status[0]['completed']);

            // error_log('size: '.count($id_array));
            // foreach ($id_array as $c) {
            //     error_log('lol: '.$c);
            // }
            // foreach ($challenges as $challenge) {
            //     foreach($user_challenges as $user_challenge) {
            //         if($challenge->id == $user_challenges->challenge_id) {

            //         }
            //     }
            // }
            //error_log($user_challenges);
            return view('challenges/index', [
                'user_challenges' => $user_challenges,
                'challenges' => $challenges,
                'challenges_status' => $challenges_status,
            ]);
        }
        return view('challenges/index', ['challenges' => $challenges]);
    }
    
    public function create() {
        // $challenge = Challenge::findOrFail($id)->get();
        return view('challenges/create');
    }
    
    public function show($id) {
        $challenge = Challenge::findOrFail($id)->get();

        return view('challenges/show', ['id' => $id]);
    }
    
    public function store() {
        $challenge = new Challenge();

        $challenge->name = request('name');
        $challenge->points = request('points');

        $challenge->save();

        return redirect('challenges/')->with('msg','New challenge added!');
    }
}
