<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(string $username): View
    {
        $user = User::where('name', $username)->first();
        return view('welcome', ['user' => $user]);
    }

    public function showAll(): string
    {
        $users = User::all();
        $output = '';

        foreach ($users as $user) {
            $output .= '<h1>User: ' . $user->name . '</h1>';
        }

        return $output;
    }
}
