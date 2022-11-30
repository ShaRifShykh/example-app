<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login() {
        if (Auth::guard("web")->check()) {
            return  redirect("/");
        }
        return view("login");
    }

    public function register() {
        if (Auth::guard("web")->check()) {
            return  redirect("/");
        }
        return view("register");
    }

    public function signIn(Request $request) {
        // Validation
        $this->validate($request, [
            "email" => "required|string",
            "password" => "required|string|min:8"
        ]);

        // Authentication
        if (Auth::guard("web")->attempt($request->only("email", "password"))) {
            return redirect("/");
        } else {
            return  redirect("/register");
        }
    }

    public function signUp(Request $request) {
        // Validation
        $this->validate($request, [
            "email" => "required|string|unique:users",
            "password" => "required|string|min:8"
        ]);

        // Added data to db
        $user = new User();
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        // Authentication
        if (Auth::guard("web")->attempt($request->only("email", "password"))) {
            return redirect("/");
        } else {
            return  redirect("/register");
        }
    }

    public function logout(Request $request) {
        Auth::guard("web")->logout();
        return redirect("/login");
    }
}
