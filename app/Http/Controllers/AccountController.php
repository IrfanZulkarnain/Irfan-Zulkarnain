<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Http\Controllers\UserController;

class AccountController extends Controller
{
    public function login(Request $request)
    {

        $users = new User();
        $user = $users->getUserId($request->txtemail, $request->txtpassword);

        // kalau email atau password salah, pergi ke page login semula (users.login)
        if ($user == null) {
            return redirect()
                ->route("users.login")
                ->with("msg", "Email and/or password incorrect");
        } else {

            session(["id" => $user->id]);
            return redirect()->route("landingPage");
        }
    }

    public function logout(Request $request)
    {

        $request->session()->forget('id');
        return redirect()->route("users.login");
    }
}
