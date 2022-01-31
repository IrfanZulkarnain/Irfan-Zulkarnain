<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\User;

class UserController extends Controller
{
    
    public function login()
    {
        return view("/users/accounts/login");
    }

    public function index()
    {
        //untuk admin
        return view("/users/accounts/login");
    }

    // this is to redirect to views
    public function create()
    {
        return view("/users/accounts/create");
    }

    public function edit($userId)
    {
        $user = User::getCommonInfo($userId);
        return view("/users/accounts/edit", compact("user"));
    }

    public function store(Request $request)
    {

        $user = new User();
        $user->fname = $request->txtfname;
        $user->lname = $request->txtlname;
        $user->password = $request->txtpassword;
        $user->email = $request->txtemail;
        $user->phone = $request->txtphone;
        $user->save();

        return redirect()->route('users.login');
    }

    public function update($id, Request $request)
    {
        $user = User::find($id);
        $user->email = $request->txtemail;
        $user->phone = $request->txtphone;
        $user->password = $request->txtpassword;
        $user->save();

        return redirect()
            ->route("users.edit", [$id])
            ->with("msg", "Profile sucessfully updated");
    }

    public function destroy()
    {
        dd("This is destroy method");
    }
}
