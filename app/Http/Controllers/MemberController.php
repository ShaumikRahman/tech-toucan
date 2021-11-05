<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    }
}
