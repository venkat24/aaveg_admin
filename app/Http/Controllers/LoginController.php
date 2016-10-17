<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Admins;
use Session;
use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function adminLogin(Request $request) {
        $validator = Validator::make($request->all(),[
            'username' => 'required',
            'password' => 'required'
        ]);
        if($validator->fails()) {
            $status_code  = 400;
            $responseBody = "Invalid Parameters";
            return response()->json([
                "response" => $responseBody,
            ], 400);
        }
        $username=$request->input('username');
        $password=$request->input('password');
        $user_entry = Admins::where('username','=',$username)
                            ->pluck('password');

        if($user_entry === md5($password)) {
            Session::put(["username" => $user_entry]);
            return response()->json([
                "response" => "success",
            ], 200);
        } else {
            return response()->json([
                "response" => "failure",
            ], 400);
        }
    }

    public function adminLogout(Request $request) {
        try {
            $status_code = 200;
            $response = "You have been logged out";
            Session::flush();
            return JSONResponse::response($status_code,$response);
        } catch (Exception $e) {
            $status_code = 500;
            $response = $e->getMessage()." ".$e->getLine();
            return JSONResponse::response($status_code,$response);
        }
    }
}