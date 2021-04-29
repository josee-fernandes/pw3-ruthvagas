<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    function store(Request $request){
        try{
            $applicant = Applicant::create($request->all());

            return response()->json($applicant, 201);
        }catch(\Throwable $th){
            return response()->json($th, 500);
        }
    }
}
