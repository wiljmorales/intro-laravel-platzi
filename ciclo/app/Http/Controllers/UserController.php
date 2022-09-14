<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = DB::table('users')->get();
        return view('users.index', [
            'users' => $users,
        ]);
    }
    public function store(Request $request) {

    }
    public function destroy(User $user) {
        $deleted = DB::table('users')->where('id','=',$user["id"]);
        return back();
    }
}
