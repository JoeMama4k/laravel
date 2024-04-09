<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(string $username): string
    {
        $user = User::where('name', $username)->first();
        return '<h1>ID:' . $user->id . '</h1> <h1>Email: ' . $user->email . '</h1>';
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
