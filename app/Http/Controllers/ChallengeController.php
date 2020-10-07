<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;
use App\Models\Challenge;

class ChallengeController extends Controller
{
    public function index() {
        $challenges = Challenge::all();

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

        return redirect('challenges/')->with('New challenge added!');
    }
    
}
