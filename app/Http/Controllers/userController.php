<?php

namespace App\Http\Controllers;

use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Http\Response as HttpResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class userController extends Controller
{

    function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (!Auth::attempt($credentials)) {
            return response(['message' => 'Invalid credentials'], HttpResponse::HTTP_UNAUTHORIZED);
        }

        $token = auth()->user()->createToken("jwt")->plainTextToken;
        $cookie = cookie('jwt', $token, 60 * 24);

        return response()->json(['message' => $token])->withCookie($cookie);
    }
    function loGout(Request $request)
    {

        $cookie=Cookie::forget('jwt');

        return response()->json(['message' => 'success'])->withCookie($cookie);
    }
}
