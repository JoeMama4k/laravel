<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(string $username): string
    {
        return '<h1>This is the page for ' . $username . '</h1>';
    }
}
