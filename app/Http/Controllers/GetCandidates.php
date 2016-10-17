<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use DB;
use App\CandidateDetails;
use Sangria\JSONResponse;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class GetCandidates extends Controller {
    public function candidateInfo(Request $request) {
        $details=CandidateDetails::get();
        return JSONResponse::response(200, $details);
    }
    
    public function selectedInfo(Request $request) {
        $details=CandidateDetails::where(DB::raw('status_oc="Selected" OR status_content="Selected"'))
                                 ->groupBy('pref1')   
                                 ->get();

        return JSONResponse::response(200, $details);
    }

    public function candidateStatus(Request $request) {
        $validator = Validator::make($request->all(),[
            'roll_no' => 'required|digits:9'
        ]);
        if($validator->fails()) {
            $status_code  = 400;
            $responseBody = "Invalid Parameters";
            return response()->json([
                "response" => $responseBody,
            ], 400);
        }
        $rollNumber = $request->input('roll_no');
        $candidateStatus = CandidateDetails::where("roll_no","=",$rollNumber)
                                  ->first();
        return JSONResponse::response(200,$candidateStatus);
    }
}