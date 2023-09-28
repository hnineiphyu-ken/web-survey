<?php

namespace App\Http\Controllers;

use App\Http\Requests\SurveyRequest;
use App\Models\Survey;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SurveyController extends Controller
{
    public function sendsurvey(SurveyRequest $request)
    {
        $request['token'] = $this->generateToken();
        try {
            DB::beginTransaction();
            $survey = Survey::create($request->all());
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors(new \Illuminate\Support\MessageBag(['catch_exception'=>$e->getMessage()]));
        }
        return view('success', compact('survey'));
    }

    public function generateToken()

    {
        do {
            $token = random_int(100000, 999999);

        } while (Survey::where("token", "=", $token)->first());
        return $token;

    }
}
