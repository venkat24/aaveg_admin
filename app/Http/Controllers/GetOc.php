<?php

namespace App\Http\Controllers;

use Exception;
use App\OcAnswers;
use App\CandidateDetails;
use Validator;
use Illuminate\Http\Request;
use Sangria\JSONResponse;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class GetOc extends Controller
{
    public function getAnswers(Request $request) {
        $validator = Validator::make($request->all(),[
            'roll_no' => 'required|digits:9'
        ]);
        if($validator->fails()) {
            $status_code  = 400;
            $responseBody = "Invalid Parameters";
            return JSONResponse::response($status_code,$responseBody);
        }
        $roll_number = $request->input('roll_no');
        try {
            $answers = OcAnswers::where('roll_no',"=",$roll_number)
                                 ->first();
            if ($answers->oc_id) {
                return JSONResponse::response(200,$answers);
            } else {
                return JSONResponse::response(400,"Invalid Roll Number");
            }
        } catch (Exception $e) {
            return JSONResponse::response(400,$e);
        }
    }

    public function getAll(Request $request) {
        try {
            $answers = OcAnswers::get();
            return JSONResponse::response(200,$answers);
        } catch (Exception $e) {
            return JSONResponse::response(400,$e);
        }
    }
}