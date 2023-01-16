<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function AllUsers(){
        $users=User::latest()->get(); //get all users
        return view('logged.table_all',compact('users'));
    }
}
