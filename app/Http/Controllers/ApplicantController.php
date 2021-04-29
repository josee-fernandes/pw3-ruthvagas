<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    function store(Request $request){
        try{
            $applicant = Applicant::create($request->all());

            // return "<x-alert type=\"success\" title=\"Tudo certo!\" text=\"Candidato cadastrado com sucesso!\" />";
            return response()->json($applicant, 201);
        }catch(\Throwable $th){
            // return "<x-alert type=\"danger\" title=\"Error!\" text=\"$th\" />";
            return response()->json($th, 500);
        }
    }
}
