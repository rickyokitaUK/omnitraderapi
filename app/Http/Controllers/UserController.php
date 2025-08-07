<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\OmniUser;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
           // FAKE user for testing
          $fakeUser = OmniUser::find(2); // get user with userid 2

     $users = OmniUser::select('userid', 'username', 'usercode', 'user_email')
            ->where('userid', '!=', $fakeUser)
            ->get();

        return response()->json($users);

        $user = $request->user();
        if (!$user) {
            return response()->json(['message' => 'Unauthenticated'], 401);
        }


        $users = OmniUser::select('userid', 'username', 'usercode', 'user_email')
            ->where('userid', '!=', $request->user()->userid)
            ->get();

        return response()->json($users);
    }
}