<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Uncle;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class TestController extends Controller
{
    //
    public function test(Uncle $uncle)
    {
        //$userIds = User::all(['id']);
        //Profile::all()->map(function($profile){
        //   $profile->user_id = $profile->id;
        //    $profile->save();
        //});
        return $uncle->second;
//        $user = JWTAuth::parseToken()->authenticate();
//        $payload  = \JWTAuth::parseToken()->getPayload();
//
//        return $payload['md'];
//        Storage::put('file.txt', 'Contents');
    }

    public function authenticate(Request $request)
    {
        // grab credentials from the request
        $credentials = ['email' => 'xzf0587@163.com', 'password' => 'secret'];
        $customClaims = ['md'=>123];

        try {
            // attempt to verify the credentials and create a token for the user
            if (!$token = JWTAuth::attempt($credentials, $customClaims)) {
                return response()->json(['error' => 'invalid_credentials'], 401);
            }
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        // all good so return the token
        return response()->json(compact('token'));
    }
}
