<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Models\User;
use App\Models\SchoolMember;
use Redirect;

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

        try {
            User::create([
                'firstname' => $r->firstname,
                'lastname' => $r->lastname,
                'email' => $r->email
            ]);
        } catch (QueryException $e) {
            $errorCode = $e->errorInfo[1];
            if ($errorCode == 1062) {
                //duplicate
                return Redirect::back()->withErrors(['msg' => 'Duplicate']);
            }
        }


        // SchoolMember::create([
        //     'userlink' => 1,
        //     'school' => 'test'
        // ]);

        //fix

        // collect($r->schools)->map(function ($school) {
        //     SchoolMember::create([
        //         'user_id' => $id,
        //         'school' => $school
        //     ]);
        // });

    }
}
