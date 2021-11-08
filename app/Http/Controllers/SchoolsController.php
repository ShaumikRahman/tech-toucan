<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SchoolMember;
use App\Models\User;
use Redirect;


class SchoolsController extends Controller
{
    public function index() {
        return view('schools');
    }

    public function schools(Request $r) {
        $school = $r->school;

        $members = SchoolMember::where('school', $school)->get();

        foreach ($members as $member) {
            //$ids[] = $member->user_id;

            $data[] = User::find((int)$member->user_id);
        }

        //dd($data);

        $haveData = isset($data);

        if ($haveData) {
            return view('schools', ['members' => $data]);
        } else {
            return Redirect::back()->withErrors(['none' => 'none']);
        }

        
        
    }
}
