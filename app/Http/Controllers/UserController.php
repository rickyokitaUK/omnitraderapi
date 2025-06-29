<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\OmniUser;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = OmniUser::select('userid', 'username', 'usercode', 'user_email')
            ->where('userid', '!=', $request->user()->userid)
            ->get();

        return response()->json($users);
    }
}