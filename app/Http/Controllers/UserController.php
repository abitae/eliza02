<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index() : View
    {
        $title = 'Users';
        return view('admin.user.index',compact('title'));
    }
}
