<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\users;
use Illuminate\Http\Request;
use App\Models\userlist;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    //
    public static function show()
    {
        return User::all();
 //       $users = userlist::table('userlist')->pluck('name');
 //       return view('userlist')->with('users ', $users);
    }
}
