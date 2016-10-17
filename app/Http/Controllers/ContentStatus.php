<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use Sangria\JSONResponse;
use App\CandidateDetails;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContentStatus extends Controller
{
    public function selectCandidate(Request $request) {
        $validator = Validator::make($request->all(),[
            'roll_no' => 'required|digits:9',
            'remarks' => 'required'
        ]);
        if($validator->fails()) {
            $status_code  = 400;
            $responseBody = "Invalid Parameters";
            return JSONResponse::response($status_code,$responseBody);
        }
        $roll_number = $request->input('roll_no');
        $remarks = $request->input('remarks');
        CandidateDetails::where("roll_no","=",$roll_number)
                        ->update([
                            "status_content" => "Selected",
                            "remarks"        => $remarks
                        ]);
        return JSONResponse::response(200,"success");
    }


    public function rejectCandidate(Request $request) {
        $validator = Validator::make($request->all(),[
            'roll_no' => 'required|digits:9',
            'remarks' => 'required'
        ]);
        if($validator->fails()) {
            $status_code  = 400;
            $responseBody = "Invalid Parameters";
            return JSONResponse::response($status_code,$responseBody);
        }
        $roll_number = $request->input('roll_no');
        $remarks = $request->input('remarks');
        CandidateDetails::where("roll_no","=",$roll_number)
                        ->update([
                            "status_content" => "Rejected",
                            "remarks"        => $remarks
                        ]);
        return JSONResponse::response(200,"success");
    }
    

    public function shortlistCandidate(Request $request) {
        $validator = Validator::make($request->all(),[
            'roll_no' => 'required|digits:9',
            'remarks' => 'required'
        ]);
        if($validator->fails()) {
            $status_code  = 400;
            $responseBody = "Invalid Parameters";
            return JSONResponse::response($status_code,$responseBody);
        }
        $roll_number = $request->input('roll_no');
        $remarks = $request->input('remarks');
        CandidateDetails::where("roll_no","=",$roll_number)
                        ->update([
                            "status_content" => "Shortlist",
                            "remarks"        => $remarks
                        ]);
        return JSONResponse::response(200,"success");
    }
}