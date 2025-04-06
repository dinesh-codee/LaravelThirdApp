<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;


class TeamsController extends Controller
{
    public function index(){
        return view ('backend.teams.index');
    }

    public function store(Request $request){
        if($request->hasFile('profile')){
            $image = time() . '.' . $request['profile']->getClientOriginalExtension();
            $location = public_path('images/teams');
            $request['profile']->move($location, $image);
        }else{
            $image = 'default.png';
        }

        $teams = new Team();
        $teams->name = $request->name;
        $teams->email = $request->email;
        $teams->address = $request->address;
        $teams->contact = $request->contact;
        $teams->faculty = $request->faculty;
        $teams->status = $request->status;
        $teams->profile=$image;
        $teams->save();
        dd($teams);
        // return back();
    }
}
