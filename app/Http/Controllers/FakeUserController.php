<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\User as User;
use Illuminate\Support\Facades\Log as Log;

class FakeUserController extends Controller
{

    // Fake login method for client to use
    public function login(Request $request)
    {

        $email = $request->email;
        $password = $request->password;

        $user = User::where('email', $email)->first();

        if (! $user) return response()->noContent();

        return json_encode($user);
    }

    // Fake logout method for client to use
    public function logout(Request $request)
    {
       return 0;
    }
}
