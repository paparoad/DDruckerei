<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Users;

class UsersController extends Controller
{
    public function get()
    {
        return Users::all();
    }
}
