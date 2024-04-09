<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(string $username): string
    {
        return '<h1>This is the page for ' . $username . '</h1>';
    }

    public function showAll(): string
    {
        $users = User::all();
        $output = '';

        foreach ($users as $user) {
            $output .= '<h1>User: ' . $user->name . '</h1>';
            $output .= '<br>'; // Add a page break after each user
        }

        return $output;
    }
}
