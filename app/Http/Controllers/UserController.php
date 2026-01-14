<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function usersList()
{
    $users = User::select('id', 'name')->get();
    return view('dashboard', compact('users'));
}
public function dashboard()
{
    $users = User::select('id','name','profile_image')->get();

    return view('dashboard', compact('users'));
}
}
