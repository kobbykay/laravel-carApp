<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{


    public function __construct()
    {
        $this->middleware('is_admin');
    }


    public function adminHome()

    {
        return view('adminHome');

    }

    public function userList()

    {
        $user = User::all();
        return view('admin.viewuser',['users'=>$user]);

    }



}
