<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Validator;
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

    public function getContentSelected(Request $request) {
        $candidates = CandidateDetails::join('content_answers',
                                             'content_answers.roll_no',
                                             '=',
                                             'candidate_details.roll_no'
                                            )
                                      ->where('status_content','=',"Selected")
                                      ->get();
        return JSONResponse::response(200,$candidates);
    }

    public function getContentRejected(Request $request) {
        $candidates = CandidateDetails::join('content_answers',
                                             'content_answers.roll_no',
                                             '=',
                                             'candidate_details.roll_no'
                                            )
                                      ->where('status_content','=',"Rejected")
                                      ->get();
        return JSONResponse::response(200,$candidates);
    }

    public function getContentShortlisted(Request $request) {
        $candidates = CandidateDetails::join('content_answers',
                                             'content_answers.roll_no',
                                             '=',
                                             'candidate_details.roll_no'
                                            )
                                      ->where('status_content','=',"Shortlisted")
                                      ->get();
        return JSONResponse::response(200,$candidates);
    }

    public function getOcSelected(Request $request) {
        $candidates = CandidateDetails::join('oc_answers',
                                             'oc_answers.roll_no',
                                             '=',
                                             'candidate_details.roll_no'
                                            )
                                      ->where('status_oc','=',"Selected")
                                      ->get();
        return JSONResponse::response(200,$candidates);
    }

    public function getOcRejected(Request $request) {
        $candidates = CandidateDetails::join('oc_answers',
                                             'oc_answers.roll_no',
                                             '=',
                                             'candidate_details.roll_no'
                                            )
                                      ->where('status_oc','=',"Rejected")
                                      ->get();
        return JSONResponse::response(200,$candidates);
    }

    public function getOcShortlisted(Request $request) {
        $candidates = CandidateDetails::join('oc_answers',
                                             'oc_answers.roll_no',
                                             '=',
                                             'candidate_details.roll_no'
                                            )
                                      ->where('status_oc','=',"Shortlisted")
                                      ->get();
        return JSONResponse::response(200,$candidates);
    }
}