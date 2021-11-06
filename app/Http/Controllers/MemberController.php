<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SchoolMember;

class MemberController extends Controller
{
    public function index() {
        return view('index');
    }

    public function store(Request $r) {

        $this->validate($r, [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'schools' => 'required'
        ]);

        User::create([
            'firstname' => $r->firstname,
            'lastname' => $r->lastname,
            'email' => $r->email
        ]);

        //fix

        collect($r->schools)->map(function ($school) {
            SchoolMember::create([
                'user_id' => $id,
                'school' => $school
            ]);
        });

    }
}
