<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\User as User;

class FakeUserController extends Controller
{

    // Fake login method for client to use
    public function login(Request $request)
    {

        $email = $request->email;

        $user = User::where('email', $email)->first();

        if (! $user) return response()->noContent();

        return json_encode($user);
    }
}
