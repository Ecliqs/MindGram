<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Egulias\EmailValidator\EmailValidator;
use Egulias\EmailValidator\Validation\DNSCheckValidation;
use Egulias\EmailValidator\Validation\MultipleValidationWithAnd;
use Egulias\EmailValidator\Validation\NoRFCWarningsValidation;
use Egulias\EmailValidator\Validation\RFCValidation;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Participant;
use App\Models\Assessment;
use App\Models\Attitude;
use App\Models\Selfesteem;
use App\Models\Internetaddictiontest;
use App\Models\Forgivenesstest;
use App\Models\Authenticity;
use App\Models\Grit;
use App\Models\Contact;
use App\Models\Event;
use App\Models\Eventregistration;

use Mail;
use App\Mail\AssertivenessAssessmentMail;
use App\Mail\AuthenticityAssessmentMail;
use App\Mail\ClarityAssessmentMail;
use App\Mail\ForgivenessAssessmentMail;
use App\Mail\GritAssessmentMail;
use App\Mail\InternetAddictionTestMail;
use App\Mail\ContactMail;
use App\Mail\ContactConfirmationMail;
use App\Mail\EventRegistrationMail;
use App\Mail\EventRegistrationConfirmationMail;

class WebController extends Controller{
    // Alchemist
    public function ahimsa(){
        return view('web.alchemist.ahimsa');
    }
    public function aparigraha(){
        return view('web.alchemist.aparigraha');
    }
    public function asteya(){
        return view('web.alchemist.asteya');
    }
    public function brahmacharya(){
        return view('web.alchemist.brahmacharya');
    }
    public function ishwarPranidhan(){
        return view('web.alchemist.ishwar-pranidhan');
    }
    public function santosh(){
        return view('web.alchemist.santosh');
    }
    public function satya(){
        return view('web.alchemist.satya');
    }
    public function shauch(){
        return view('web.alchemist.shauch');
    }
    public function swadhyay(){
        return view('web.alchemist.swadhyay');
    }
    public function tapas(){
        return view('web.alchemist.tapas');
    }

    // Assessments
    public function allAssessments(){
        return view('web.all-assessments');
    }
    public function assertivenessAssessment(){
        $data = Assessment::where('assessment_name', 'Assertiveness')->get();
        return view('web.assessments.assertiveness-assessment', ['data' => $data]);
    }
    public function assertivenessAssessmentResult(Request $request){
        $flight = 0;
        $attack = 0;
        $manipul = 0;
        $harmony = 0;

        if($request->answer1 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer2 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer3 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer4 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer5 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer6 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer7 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer8 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer9 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer10 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer11 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer12 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer13 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer14 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer15 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer16 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer17 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer18 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer19 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer20 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer21 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer22 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer23 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer24 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer25 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer26 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer27 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer28 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer29 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer30 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer31 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer32 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer33 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer34 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer35 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer36 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer37 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer38 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer39 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer40 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer41 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer42 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer43 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer44 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer45 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer46 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer47 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer48 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer49 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer50 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer51 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer52 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer53 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer54 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer55 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer56 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer57 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer58 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer59 == 'Rather true'){
            $flight += 1;
        }
        if($request->answer60 == 'Rather true'){
            $flight += 1;
        }

        if(Participant::where('email', $request->email)->orWhere('mobile', $request->mobile)->exists()){
            $participant = Participant::where('email', $request->email)->orWhere('mobile', $request->mobile)->first();
            $report = new Attitude([
                'participant_id' => $participant->id,
                'assessment' => 'Assertive Assessment',
                'passive' => $flight,
                'aggresive' => $attack,
                'manipulation' => $manipul,
                'harmonious' => $harmony,
            ]);
            $report->save();

            $mailData = [
                'title' => 'Assertiveness Assessment Result',
                'name' => $participant->full_name,
                'flight' => $flight,
                'attack' => $attack,
                'manipul' => $manipul,
                'harmony' => $harmony,
            ];
            Mail::to($request->email, $request->fullname)->send(new AssertivenessAssessmentMail());

            return response()->json([
                'status' => 'success',
                'message' => 'Assessment completed successfully!',
            ], 200);
        }else{
            $participant = new Participant([
                'full_name' => $request->fullname,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'gender' => $request->gender,
                'age' => $request->age,
            ]);
            $result = $participant->save();
            $accid = $participant->id;
    
            if(!is_null($result)){
                $report = new Attitude([
                    'participant_id' => $accid,
                    'assessment' => 'Assertive Assessment',
                    'passive' => $flight,
                    'aggresive' => $attack,
                    'manipulation' => $manipul,
                    'harmonious' => $harmony,
                ]);
                $report->save();
    
                $mailData = [
                    'title' => 'Assertiveness Assessment Result',
                    'name' => $contact->name,
                    'flight' => $flight,
                    'attack' => $attack,
                    'manipul' => $manipul,
                    'harmony' => $harmony,
                ];
                Mail::to($request->email, $request->fullname)->send(new AssertivenessAssessmentMail());
    
                return response()->json([
                    'status' => 'success',
                    'message' => 'Assessment completed successfully!',
                ], 200);
            }else{
                return response()->json([
                    'status' => 'error',
                    'message' => 'Something went wrong! Please try again later.',
                ], 403);
            }
        }
    }
    public function clarityAssessment(){
        $data = Assessment::where('assessment_name', 'Clarity')->get();
        return view('web.assessments.clarity-assessment', ['data' => $data]);
    }
    public function clarityAssessmentResult(Request $request){
        $score = 0;

        if($request->answer61 == 'Strongly Agree'){
            $score += 3;
        }elseif($request->answer61 == 'Agree'){
            $score += 2;
        }elseif($request->answer61 == 'Disagree'){
            $score += 1;
        }else{
            $score += 0; 
        }

        if($request->answer62 == 'Strongly Agree'){
            $score += 3;
        }elseif($request->answer62 == 'Agree'){
            $score += 2;
        }elseif($request->answer62 == 'Disagree'){
            $score += 1;
        }else{
            $score += 0; 
        }

        if($request->answer63 == 'Strongly Agree'){
            $score += 0;
        }elseif($request->answer63 == 'Agree'){
            $score += 1;
        }elseif($request->answer63 == 'Disagree'){
            $score += 2;
        }else{
            $score += 3; 
        }

        if($request->answer64 == 'Strongly Agree'){
            $score += 3;
        }elseif($request->answer64 == 'Agree'){
            $score += 2;
        }elseif($request->answer64 == 'Disagree'){
            $score += 1;
        }else{
            $score += 0; 
        }

        if($request->answer65 == 'Strongly Agree'){
            $score += 0;
        }elseif($request->answer65 == 'Agree'){
            $score += 1;
        }elseif($request->answer65 == 'Disagree'){
            $score += 2;
        }else{
            $score += 3; 
        }

        if($request->answer66 == 'Strongly Agree'){
            $score += 3;
        }elseif($request->answer66 == 'Agree'){
            $score += 2;
        }elseif($request->answer66 == 'Disagree'){
            $score += 1;
        }else{
            $score += 0; 
        }

        if($request->answer67 == 'Strongly Agree'){
            $score += 3;
        }elseif($request->answer67 == 'Agree'){
            $score += 2;
        }elseif($request->answer67 == 'Disagree'){
            $score += 1;
        }else{
            $score += 0; 
        }

        if($request->answer68 == 'Strongly Agree'){
            $score += 0;
        }elseif($request->answer68 == 'Agree'){
            $score += 1;
        }elseif($request->answer68 == 'Disagree'){
            $score += 2;
        }else{
            $score += 3; 
        }

        if($request->answer69 == 'Strongly Agree'){
            $score += 0;
        }elseif($request->answer69 == 'Agree'){
            $score += 1;
        }elseif($request->answer69 == 'Disagree'){
            $score += 2;
        }else{
            $score += 3; 
        }

        if($request->answer70 == 'Strongly Agree'){
            $score += 0;
        }elseif($request->answer70 == 'Agree'){
            $score += 1;
        }elseif($request->answer70 == 'Disagree'){
            $score += 2;
        }else{
            $score += 3; 
        }

        if(Participant::where('email', $request->email)->orWhere('mobile', $request->mobile)->exists()){
            $participant = Participant::where('email', $request->email)->orWhere('mobile', $request->mobile)->first();
            $report = new Selfesteem([
                'participant_id' => $participant->id,
                'assessment' => 'Clarity Assessment',
                'score' => $score,
            ]);
            $report->save();

            $mailData = [
                'title' => 'Clarity Assessment Result',
                'name' => $participant->full_name,
                'score' => $score,
            ];
            Mail::to($request->email, $request->fullname)->send(new ClarityAssessmentMail());

            return response()->json([
                'status' => 'success',
                'message' => 'Assessment completed successfully!',
            ], 200);
        }else{
            $participant = new Participant([
                'full_name' => $request->fullname,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'gender' => $request->gender,
                'age' => $request->age,
            ]);
            $result = $participant->save();
            $accid = $participant->id;
    
            if(!is_null($result)){
                $report = new Attitude([
                    'participant_id' => $accid,
                    'assessment' => 'Clarity Assessment',
                    'score' => $score,
                ]);
                $report->save();
    
                $mailData = [
                    'title' => 'Clarity Assessment Result',
                    'name' => $contact->name,
                    'score' => $score,
                ];
                Mail::to($request->email, $request->fullname)->send(new ClarityAssessmentMail());
    
                return response()->json([
                    'status' => 'success',
                    'message' => 'Assessment completed successfully!',
                ], 200);
            }else{
                return response()->json([
                    'status' => 'error',
                    'message' => 'Something went wrong! Please try again later.',
                ], 403);
            }
        }
    }
    public function internetAddictionAssessment(){
        $data = Assessment::where('assessment_name', 'IAT')->get();
        return view('web.assessments.internet-addiction-assessment', ['data' => $data]);
    }
    public function internetAddictionAssessmentResult(Request $request){
        $score = 0;

        for($i=122; $i<=141; $i++){
            $score += $request->answer.$i;
        }

        if(Participant::where('email', $request->email)->orWhere('mobile', $request->mobile)->exists()){
            $participant = Participant::where('email', $request->email)->orWhere('mobile', $request->mobile)->first();
            $report = new Internetaddictiontest([
                'participant_id' => $participant->id,
                'assessment' => 'Internet Addiction Test',
                'score' => $score,
            ]);
            $report->save();

            $mailData = [
                'title' => 'Internet Addiction Test Result',
                'name' => $participant->full_name,
                'score' => $score,
            ];
            Mail::to($request->email, $request->fullname)->send(new InternetAddictionTestMail());

            return response()->json([
                'status' => 'success',
                'message' => 'Assessment completed successfully!',
            ], 200);
        }else{
            $participant = new Participant([
                'full_name' => $request->fullname,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'gender' => $request->gender,
                'age' => $request->age,
            ]);
            $result = $participant->save();
            $accid = $participant->id;
    
            if(!is_null($result)){
                $report = new Internetaddictiontest([
                    'participant_id' => $accid,
                    'assessment' => 'Internet Addiction Test',
                    'score' => $score,
                ]);
                $report->save();
    
                $mailData = [
                    'title' => 'Internet Addiction Test Result',
                    'name' => $contact->name,
                    'score' => $score,
                ];
                Mail::to($request->email, $request->fullname)->send(new InternetAddictionTestMail());
    
                return response()->json([
                    'status' => 'success',
                    'message' => 'Assessment completed successfully!',
                ], 200);
            }else{
                return response()->json([
                    'status' => 'error',
                    'message' => 'Something went wrong! Please try again later.',
                ], 403);
            }
        }
    }
    public function creativityAssessment(){
        return view('web.assessments.creativity-assessment');
    }
    public function forgivenessAssessment(){
        $data = Assessment::where('assessment_name', 'Forgiveness')->get();
        return view('web.assessments.forgiveness-assessment', ['data' => $data]);
    }
    public function forgivenessAssessmentResult(Request $request){
        $hfs = 0;
        $shfs = 0;
        $ohfs = 0;
        $chfs = 0;

        for($i=71; $i<=88; $i++){
            if($i == 71 && $i == 73 && $i == 75 && $i == 78 && $i == 80 && $i == 82 && $i == 84 && $i == 86 && $i == 88){
                if($request->answer.$i == 1){
                    $hfs += 1;
                }else if($request->answer.$i == 2){
                    $hfs += 2;
                }else if($request->answer.$i == 3){
                    $hfs += 3;
                }else if($request->answer.$i == 4){
                    $hfs += 4;
                }else if($request->answer.$i == 5){
                    $hfs += 5;
                }else if($request->answer.$i == 6){
                    $hfs += 6;
                }else{
                    $hfs += 7;
                }
            }else{
                if($request->answer.$i == 1){
                    $hfs += 7;
                }else if($request->answer.$i == 2){
                    $hfs += 6;
                }else if($request->answer.$i == 3){
                    $hfs += 5;
                }else if($request->answer.$i == 4){
                    $hfs += 4;
                }else if($request->answer.$i == 5){
                    $hfs += 3;
                }else if($request->answer.$i == 6){
                    $hfs += 2;
                }else{
                    $hfs += 1;
                }
            }
        }

        for($i=71; $i<=76; $i++){
            if($i == 71 && $i == 73 && $i == 75){
                if($request->answer.$i == 1){
                    $shfs += 1;
                }else if($request->answer.$i == 2){
                    $shfs += 2;
                }else if($request->answer.$i == 3){
                    $shfs += 3;
                }else if($request->answer.$i == 4){
                    $shfs += 4;
                }else if($request->answer.$i == 5){
                    $shfs += 5;
                }else if($request->answer.$i == 6){
                    $shfs += 6;
                }else{
                    $shfs += 7;
                }
            }else{
                if($request->answer.$i == 1){
                    $shfs += 7;
                }else if($request->answer.$i == 2){
                    $shfs += 6;
                }else if($request->answer.$i == 3){
                    $shfs += 5;
                }else if($request->answer.$i == 4){
                    $shfs += 4;
                }else if($request->answer.$i == 5){
                    $shfs += 3;
                }else if($request->answer.$i == 6){
                    $shfs += 2;
                }else{
                    $shfs += 1;
                }
            }
        }
    
        for($i=77; $i<=82; $i++){
            if($i == 78 && $i == 80 && $i == 82){
                if($request->answer.$i == 1){
                    $ohfs += 1;
                }else if($request->answer.$i == 2){
                    $ohfs += 2;
                }else if($request->answer.$i == 3){
                    $ohfs += 3;
                }else if($request->answer.$i == 4){
                    $ohfs += 4;
                }else if($request->answer.$i == 5){
                    $ohfs += 5;
                }else if($request->answer.$i == 6){
                    $ohfs += 6;
                }else{
                    $ohfs += 7;
                }
            }else{
                if($request->answer.$i == 1){
                    $ohfs += 7;
                }else if($request->answer.$i == 2){
                    $ohfs += 6;
                }else if($request->answer.$i == 3){
                    $ohfs += 5;
                }else if($request->answer.$i == 4){
                    $ohfs += 4;
                }else if($request->answer.$i == 5){
                    $ohfs += 3;
                }else if($request->answer.$i == 6){
                    $ohfs += 2;
                }else{
                    $ohfs += 1;
                }
            }
        }
    
        for($i=83; $i<=88; $i++){
            if($i == 84 && $i == 86 && $i == 88){
                if($request->answer.$i == 1){
                    $chfs += 1;
                }else if($request->answer.$i == 2){
                    $chfs += 2;
                }else if($request->answer.$i == 3){
                    $chfs += 3;
                }else if($request->answer.$i == 4){
                    $chfs += 4;
                }else if($request->answer.$i == 5){
                    $chfs += 5;
                }else if($request->answer.$i == 6){
                    $chfs += 6;
                }else{
                    $chfs += 7;
                }
            }else{
                if($request->answer.$i == 1){
                    $chfs += 7;
                }else if($request->answer.$i == 2){
                    $chfs += 6;
                }else if($request->answer.$i == 3){
                    $chfs += 5;
                }else if($request->answer.$i == 4){
                    $chfs += 4;
                }else if($request->answer.$i == 5){
                    $chfs += 3;
                }else if($request->answer.$i == 6){
                    $chfs += 2;
                }else{
                    $chfs += 1;
                }
            }
        }

        if(Participant::where('email', $request->email)->orWhere('mobile', $request->mobile)->exists()){
            $participant = Participant::where('email', $request->email)->orWhere('mobile', $request->mobile)->first();
            $report = new Forgivenesstest([
                'participant_id' => $participant->id,
                'assessment' => 'Forgiveness Assessment',
                'hfs' => $hfs,
                'self_hfs' => $shfs,
                'other_hfs' => $ohfs,
                'situation_hfs' => $chfs,
            ]);
            $report->save();

            $mailData = [
                'title' => 'Forgiveness Assessment Result',
                'name' => $participant->full_name,
                'hfs' => $hfs,
                'self_hfs' => $shfs,
                'other_hfs' => $ohfs,
                'situation_hfs' => $chfs,
            ];
            Mail::to($request->email, $request->fullname)->send(new ForgivenessAssessmentMail());

            return response()->json([
                'status' => 'success',
                'message' => 'Assessment completed successfully!',
            ], 200);
        }else{
            $participant = new Participant([
                'full_name' => $request->fullname,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'gender' => $request->gender,
                'age' => $request->age,
            ]);
            $result = $participant->save();
            $accid = $participant->id;
    
            if(!is_null($result)){
                $report = new Forgivenesstest([
                    'participant_id' => $accid,
                    'assessment' => 'Forgiveness Assessment',
                    'hfs' => $hfs,
                    'self_hfs' => $shfs,
                    'other_hfs' => $ohfs,
                    'situation_hfs' => $chfs,
                ]);
                $report->save();
    
                $mailData = [
                    'title' => 'Forgiveness Assessment Result',
                    'name' => $contact->name,
                    'hfs' => $hfs,
                    'self_hfs' => $shfs,
                    'other_hfs' => $ohfs,
                    'situation_hfs' => $chfs,
                ];
                Mail::to($request->email, $request->fullname)->send(new ForgivenessAssessmentMail());
    
                return response()->json([
                    'status' => 'success',
                    'message' => 'Assessment completed successfully!',
                ], 200);
            }else{
                return response()->json([
                    'status' => 'error',
                    'message' => 'Something went wrong! Please try again later.',
                ], 403);
            }
        }
    }
    public function authenticityAssessment(){
        $data = Assessment::where('assessment_name', 'Authenticity')->get();
        return view('web.assessments.authenticity-assessment', ['data' => $data]);
    }
    public function authenticityAssessmentResult(Request $request){
        $sa = 0;
        $imp = 0;
        $bp = 0;
        $rt = 0;

        if($request->answer89 == 'Strongly disagree'){
            $sa += 1;
        }else if($request->answer89 == 'Disagree'){
            $sa += 2;
        }else if($request->answer89 == 'Neutral'){
            $sa += 3;
        }else if($request->answer89 == 'Agree'){
            $sa += 4;
        }else{
            $sa += 5;
        }

        if($request->answer90 == 'Strongly disagree'){
            $imp += 1;
        }else if($request->answer90 == 'Disagree'){
            $imp += 2;
        }else if($request->answer90 == 'Neutral'){
            $imp += 3;
        }else if($request->answer90 == 'Agree'){
            $imp += 4;
        }else{
            $imp += 5;
        }

        if($request->answer91 == 'Strongly disagree'){
            $bp += 1;
        }else if($request->answer91 == 'Disagree'){
            $bp += 2;
        }else if($request->answer91 == 'Neutral'){
            $bp += 3;
        }else if($request->answer91 == 'Agree'){
            $bp += 4;
        }else{
            $bp += 5;
        }

        if($request->answer92 == 'Strongly disagree'){
            $rt += 1;
        }else if($request->answer92 == 'Disagree'){
            $rt += 2;
        }else if($request->answer92 == 'Neutral'){
            $rt += 3;
        }else if($request->answer92 == 'Agree'){
            $rt += 4;
        }else{
            $rt += 5;
        }

        if($request->answer93 == 'Strongly disagree'){
            $sa += 1;
        }else if($request->answer93 == 'Disagree'){
            $sa += 2;
        }else if($request->answer93 == 'Neutral'){
            $sa += 3;
        }else if($request->answer93 == 'Agree'){
            $sa += 4;
        }else{
            $sa += 5;
        }

        if($request->answer94 == 'Strongly disagree'){
            $imp += 1;
        }else if($request->answer94 == 'Disagree'){
            $imp += 2;
        }else if($request->answer94 == 'Neutral'){
            $imp += 3;
        }else if($request->answer94 == 'Agree'){
            $imp += 4;
        }else{
            $imp += 5;
        }
    
        if($request->answer95 == 'Strongly disagree'){
            $bp += 1;
        }else if($request->answer95 == 'Disagree'){
            $bp += 2;
        }else if($request->answer95 == 'Neutral'){
            $bp += 3;
        }else if($request->answer95 == 'Agree'){
            $bp += 4;
        }else{
            $bp += 5;
        }

        if($request->answer96 == 'Strongly disagree'){
            $rt += 1;
        }else if($request->answer96 == 'Disagree'){
            $rt += 2;
        }else if($request->answer96 == 'Neutral'){
            $rt += 3;
        }else if($request->answer96 == 'Agree'){
            $rt += 4;
        }else{
            $rt += 5;
        }
    
        if($request->answer97 == 'Strongly disagree'){
            $sa += 1;
        }else if($request->answer97 == 'Disagree'){
            $sa += 2;
        }else if($request->answer97 == 'Neutral'){
            $sa += 3;
        }else if($request->answer97 == 'Agree'){
            $sa += 4;
        }else{
            $sa += 5;
        }

        if($request->answer98 == 'Strongly disagree'){
            $imp += 1;
        }else if($request->answer98 == 'Disagree'){
            $imp += 2;
        }else if($request->answer98 == 'Neutral'){
            $imp += 3;
        }else if($request->answer98 == 'Agree'){
            $imp += 4;
        }else{
            $imp += 5;
        }
    
        if($request->answer99 == 'Strongly disagree'){
            $bp += 1;
        }else if($request->answer99 == 'Disagree'){
            $bp += 2;
        }else if($request->answer99 == 'Neutral'){
            $bp += 3;
        }else if($request->answer99 == 'Agree'){
            $bp += 4;
        }else{
            $bp += 5;
        }

        if($request->answer100 == 'Strongly disagree'){
            $rt += 1;
        }else if($request->answer100 == 'Disagree'){
            $rt += 2;
        }else if($request->answer100 == 'Neutral'){
            $rt += 3;
        }else if($request->answer100 == 'Agree'){
            $rt += 4;
        }else{
            $rt += 5;
        }
    
        if($request->answer101 == 'Strongly disagree'){
            $sa += 1;
        }else if($request->answer101 == 'Disagree'){
            $sa += 2;
        }else if($request->answer101 == 'Neutral'){
            $sa += 3;
        }else if($request->answer101 == 'Agree'){
            $sa += 4;
        }else{
            $sa += 5;
        }

        if($request->answer102 == 'Strongly disagree'){
            $imp += 1;
        }else if($request->answer102 == 'Disagree'){
            $imp += 2;
        }else if($request->answer102 == 'Neutral'){
            $imp += 3;
        }else if($request->answer102 == 'Agree'){
            $imp += 4;
        }else{
            $imp += 5;
        }
    
        if($request->answer103 == 'Strongly disagree'){
            $bp += 1;
        }else if($request->answer103 == 'Disagree'){
            $bp += 2;
        }else if($request->answer103 == 'Neutral'){
            $bp += 3;
        }else if($request->answer103 == 'Agree'){
            $bp += 4;
        }else{
            $bp += 5;
        }

        if($request->answer104 == 'Strongly disagree'){
            $rt += 1;
        }else if($request->answer104 == 'Disagree'){
            $rt += 2;
        }else if($request->answer104 == 'Neutral'){
            $rt += 3;
        }else if($request->answer104 == 'Agree'){
            $rt += 4;
        }else{
            $rt += 5;
        }

        if(Participant::where('email', $request->email)->orWhere('mobile', $request->mobile)->exists()){
            $participant = Participant::where('email', $request->email)->orWhere('mobile', $request->mobile)->first();
            $report = new Authenticity([
                'participant_id' => $participant->id,
                'assessment' => 'Authenticity Assessment',
                'sa' => $sa,
                'imp' => $imp,
                'bp' => $bp,
                'rt' => $rt,
            ]);
            $report->save();

            $mailData = [
                'title' => 'Forgiveness Assessment Result',
                'name' => $participant->full_name,
                'hfs' => $hfs,
                'self_hfs' => $shfs,
                'other_hfs' => $ohfs,
                'situation_hfs' => $chfs,
            ];
            Mail::to($request->email, $request->fullname)->send(new AuthenticityAssessmentMail());

            return response()->json([
                'status' => 'success',
                'message' => 'Assessment completed successfully!',
            ], 200);
        }else{
            $participant = new Participant([
                'full_name' => $request->fullname,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'gender' => $request->gender,
                'age' => $request->age,
            ]);
            $result = $participant->save();
            $accid = $participant->id;
    
            if(!is_null($result)){
                $report = new Authenticity([
                    'participant_id' => $accid,
                    'assessment' => 'Authenticity Assessment',
                    'sa' => $sa,
                    'imp' => $imp,
                    'bp' => $bp,
                    'rt' => $rt,
                ]);
                $report->save();
    
                $mailData = [
                    'title' => 'Forgiveness Assessment Result',
                    'name' => $contact->name,
                    'hfs' => $hfs,
                    'self_hfs' => $shfs,
                    'other_hfs' => $ohfs,
                    'situation_hfs' => $chfs,
                ];
                Mail::to($request->email, $request->fullname)->send(new AuthenticityAssessmentMail());
    
                return response()->json([
                    'status' => 'success',
                    'message' => 'Assessment completed successfully!',
                ], 200);
            }else{
                return response()->json([
                    'status' => 'error',
                    'message' => 'Something went wrong! Please try again later.',
                ], 403);
            }
        }
    }
    public function happinessAssessment(){
        return view('web.assessments.happiness-assessment');
    }
    public function gritAssessment(){
        $data = Assessment::where('assessment_name', 'Grit')->get();
        return view('web.assessments.grit-assessment', ['data' => $data]);
    }
    public function gritAssessmentResult(Request $request){
        $grit = 0;
        $ci = 0;
        $pe = 0;
        $bgrit = 0;
        $amb = 0;

        if($request->answer105 == 'Very much like me'){
            $amb += 5;
        }elseif($request->answer105 == 'Mostly like me'){
            $amb += 4;
        }elseif($request->answer105 == 'Somewhat like me'){
            $amb += 3;
        }elseif($request->answer105 == 'Not much at all like me'){
            $amb += 2;
        }else{
            $amb += 1;
        }

        if($request->answer106 == 'Very much like me'){
            $grit += 5;
            $pe += 5;
        }elseif($request->answer106 == 'Mostly like me'){
            $grit += 4;
            $pe += 4;
        }elseif($request->answer106 == 'Somewhat like me'){
            $grit += 3;
            $pe += 3;
        }elseif($request->answer106 == 'Not much at all like me'){
            $grit += 2;
            $pe += 2;
        }else{
            $grit += 1;
            $pe += 1;
        }

        if($request->answer107 == 'Very much like me'){
            $grit += 1;
            $ci += 1;
            $bgrit += 1;
        }elseif($request->answer107 == 'Mostly like me'){
            $grit += 2;
            $ci += 2;
            $bgrit += 2;
        }elseif($request->answer107 == 'Somewhat like me'){
            $grit += 3;
            $ci += 3;
            $bgrit += 3;
        }elseif($request->answer107 == 'Not much at all like me'){
            $grit += 4;
            $ci += 4;
            $bgrit += 4;
        }else{
            $grit += 5;
            $ci += 5;
            $bgrit += 5;
        }

        if($request->answer108 == 'Very much like me'){
            $amb += 5;
        }elseif($request->answer108 == 'Mostly like me'){
            $amb += 4;
        }elseif($request->answer108 == 'Somewhat like me'){
            $amb += 3;
        }elseif($request->answer108 == 'Not much at all like me'){
            $amb += 2;
        }else{
            $amb += 1;
        }

        if($request->answer109 == 'Very much like me'){
            $amb += 1;
            $ci += 1;
        }elseif($request->answer109 == 'Mostly like me'){
            $amb += 2;
            $ci += 2;
        }elseif($request->answer109 == 'Somewhat like me'){
            $amb += 3;
            $ci += 3;
        }elseif($request->answer109 == 'Not much at all like me'){
            $amb += 4;
            $ci += 4;
        }else{
            $amb += 5;
            $ci += 5;
        }

        if($request->answer110 == 'Very much like me'){
            $grit += 5;
            $pe += 5;
            $bgrit += 5;
        }elseif($request->answer110 == 'Mostly like me'){
            $grit += 4;
            $pe += 4;
            $bgrit += 4;
        }elseif($request->answer110 == 'Somewhat like me'){
            $grit += 3;
            $pe += 3;
            $bgrit += 3;
        }elseif($request->answer110 == 'Not much at all like me'){
            $grit += 2;
            $pe += 2;
            $bgrit += 2;
        }else{
            $grit += 1;
            $ci += 1;
            $pe += 1;
            $bgrit += 1;
        }

        if($request->answer111 == 'Very much like me'){
            $grit += 1;
            $ci += 1;
            $bgrit += 1;
        }elseif($request->answer111 == 'Mostly like me'){
            $grit += 2;
            $ci += 2;
            $bgrit += 2;
        }elseif($request->answer111 == 'Somewhat like me'){
            $grit += 3;
            $ci += 3;
            $bgrit += 3;
        }elseif($request->answer111 == 'Not much at all like me'){
            $grit += 4;
            $ci += 4;
            $bgrit += 4;
        }else{
            $grit += 5;
            $ci += 5;
            $bgrit += 5;
        }

        if($request->answer112 == 'Very much like me'){
            $grit += 5;
            $pe += 5;
            $bgrit += 5;
        }elseif($request->answer112 == 'Mostly like me'){
            $grit += 4;
            $pe += 4;
            $bgrit += 4;
        }elseif($request->answer112 == 'Somewhat like me'){
            $grit += 3;
            $pe += 3;
            $bgrit += 3;
        }elseif($request->answer112 == 'Not much at all like me'){
            $grit += 2;
            $pe += 2;
            $bgrit += 2;
        }else{
            $grit += 1;
            $pe += 1;
            $bgrit += 1;
        }

        if($request->answer113 == 'Very much like me'){
            $grit += 1;
            $ci += 1;
            $bgrit += 1;
        }elseif($request->answer113 == 'Mostly like me'){
            $grit += 2;
            $ci += 2;
            $bgrit += 2;
        }elseif($request->answer113 == 'Somewhat like me'){
            $grit += 3;
            $ci += 3;
            $bgrit += 3;
        }elseif($request->answer113 == 'Not much at all like me'){
            $grit += 4;
            $ci += 4;
            $bgrit += 4;
        }else{
            $grit += 5;
            $ci += 5;
            $bgrit += 5;
        }

        if($request->answer114 == 'Very much like me'){
            $grit += 1;
            $ci += 1;
            $bgrit += 1;
        }elseif($request->answer114 == 'Mostly like me'){
            $grit += 2;
            $ci += 2;
            $bgrit += 2;
        }elseif($request->answer114 == 'Somewhat like me'){
            $grit += 3;
            $ci += 3;
            $bgrit += 3;
        }elseif($request->answer114 == 'Not much at all like me'){
            $grit += 4;
            $ci += 4;
            $bgrit += 4;
        }else{
            $grit += 5;
            $ci += 5;
            $bgrit += 5;
        }

        if($request->answer115 == 'Very much like me'){
            $grit += 5;
            $pe += 5;
            $bgrit += 5;
        }elseif($request->answer115 == 'Mostly like me'){
            $grit += 4;
            $pe += 4;
            $bgrit += 4;
        }elseif($request->answer115 == 'Somewhat like me'){
            $grit += 3;
            $pe += 3;
            $bgrit += 3;
        }elseif($request->answer115 == 'Not much at all like me'){
            $grit += 2;
            $pe += 2;
            $bgrit += 2;
        }else{
            $grit += 1;
            $pe += 1;
            $bgrit += 1;
        }

        if($request->answer116 == 'Very much like me'){
            $amb += 1;
        }elseif($request->answer116 == 'Mostly like me'){
            $amb += 2;
        }elseif($request->answer116 == 'Somewhat like me'){
            $amb += 3;
        }elseif($request->answer116 == 'Not much at all like me'){
            $amb += 4;
        }else{
            $amb += 5;
        }
    
        if($request->answer117 == 'Very much like me'){
            $amb += 1;
        }elseif($request->answer117 == 'Mostly like me'){
            $amb += 2;
        }elseif($request->answer117 == 'Somewhat like me'){
            $amb += 3;
        }elseif($request->answer117 == 'Not much at all like me'){
            $amb += 4;
        }else{
            $amb += 5;
        }

        if($request->answer118 == 'Very much like me'){
            $grit += 5;
            $pe += 5;
        }elseif($request->answer118 == 'Mostly like me'){
            $grit += 4;
            $pe += 4;
        }elseif($request->answer118 == 'Somewhat like me'){
            $grit += 3;
            $pe += 3;
        }elseif($request->answer118 == 'Not much at all like me'){
            $grit += 2;
            $pe += 2;
        }else{
            $grit += 1;
            $pe += 1;
        }

        if($request->answer119 == 'Very much like me'){
            $amb += 1;
        }elseif($request->answer119 == 'Mostly like me'){
            $amb += 2;
        }elseif($request->answer119 == 'Somewhat like me'){
            $amb += 3;
        }elseif($request->answer119 == 'Not much at all like me'){
            $amb += 4;
        }else{
            $amb += 5;
        }

        if($request->answer120 == 'Very much like me'){
            $grit += 1;
            $ci += 1;
        }elseif($request->answer120 == 'Mostly like me'){
            $grit += 2;
            $ci += 2;
        }elseif($request->answer120 == 'Somewhat like me'){
            $grit += 3;
            $ci += 3;
        }elseif($request->answer120 == 'Not much at all like me'){
            $grit += 4;
            $ci += 4;
        }else{
            $grit += 5;
            $ci += 5;
        }

        if($request->answer121 == 'Very much like me'){
            $grit += 5;
            $pe += 5;
            $bgrit += 5;
        }elseif($request->answer121 == 'Mostly like me'){
            $grit += 4;
            $pe += 4;
            $bgrit += 4;
        }elseif($request->answer121 == 'Somewhat like me'){
            $grit += 3;
            $pe += 3;
            $bgrit += 3;
        }elseif($request->answer121 == 'Not much at all like me'){
            $grit += 2;
            $pe += 2;
            $bgrit += 2;
        }else{
            $grit += 1;
            $pe += 1;
            $bgrit += 1;
        }

        if(Participant::where('email', $request->email)->orWhere('mobile', $request->mobile)->exists()){
            $participant = Participant::where('email', $request->email)->orWhere('mobile', $request->mobile)->first();
            $report = new Grit([
                'participant_id' => $participant->id,
                'assessment' => 'Grit Assessment',
                'grit' => $grit,
                'ci' => $ci,
                'pe' => $pe,
                'bgrit' => $bgrit,
                'amb' => $amb,
            ]);
            $report->save();

            $mailData = [
                'title' => 'Forgiveness Assessment Result',
                'name' => $participant->full_name,
                'grit' => $grit,
                'ci' => $ci,
                'pe' => $pe,
                'bgrit' => $bgrit,
                'amb' => $amb,
            ];
            Mail::to($request->email, $request->fullname)->send(new GritAssessmentMail());

            return response()->json([
                'status' => 'success',
                'message' => 'Assessment completed successfully!',
            ], 200);
        }else{
            $participant = new Participant([
                'full_name' => $request->fullname,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'gender' => $request->gender,
                'age' => $request->age,
            ]);
            $result = $participant->save();
            $accid = $participant->id;
    
            if(!is_null($result)){
                $report = new Grit([
                    'participant_id' => $accid,
                    'assessment' => 'Grit Assessment',
                    'grit' => $grit,
                    'ci' => $ci,
                    'pe' => $pe,
                    'bgrit' => $bgrit,
                    'amb' => $amb,
                ]);
                $report->save();
    
                $mailData = [
                    'title' => 'Grit Assessment Result',
                    'name' => $participant->full_name,
                    'grit' => $grit,
                    'ci' => $ci,
                    'pe' => $pe,
                    'bgrit' => $bgrit,
                    'amb' => $amb,
                ];
                Mail::to($request->email, $request->fullname)->send(new GritAssessmentMail());
    
                return response()->json([
                    'status' => 'success',
                    'message' => 'Assessment completed successfully!',
                ], 200);
            }else{
                return response()->json([
                    'status' => 'error',
                    'message' => 'Something went wrong! Please try again later.',
                ], 403);
            }
        }
    }
    public function selfCareAssessment(){
        return view('web.assessments.self-care-assessment');
    }

    // Mind Exercises
    public function flexibilitySkills(){
        return view('web.mind-exercise.flexibility-skills');
    }
    public function skillsForClarity(){
        return view('web.mind-exercise.skills-for-clarity');
    }
    public function skillsForOriginality(){
        return view('web.mind-exercise.skills-for-originality');
    }
    public function skillsForCreativity(){
        return view('web.mind-exercise.skills-for-creativity');
    }
    public function skillsForLettingGo(){
        return view('web.mind-exercise.skills-for-letting-go');
    }
    public function skillsForAuthenticity(){
        return view('web.mind-exercise.skills-for-authenticity');
    }
    public function skillsForMindfulness(){
        return view('web.mind-exercise.skills-for-mindfulness');
    }
    public function skillsForDiscipline(){
        return view('web.mind-exercise.skills-for-discipline');
    }
    public function skillsForSelfImprovment(){
        return view('web.mind-exercise.skills-for-self-improvement');
    }
    public function skillsForMiraculousThinking(){
        return view('web.mind-exercise.skills-for-miraculous-thinking');
    }
    
    public function artTherapyExercises(){
        return view('web.art-therapy-exercises');
    }

    // Journaling Exercises
    public function therapeuticJournaling(){
        return view('web.journaling-exercise.therapeutic-journaling');
    }
    public function settingYourHealingIntentions(){
        return view('web.journaling-exercise.setting-your-healing-intentions');
    }
    public function creatingFoundationForChange(){
        return view('web.journaling-exercise.creating-a-foundation-for-change');
    }

    // BodyWork
    public function breathwork(){
        return view('web.bodywork.breathwork');
    }
    public function nutrition(){
        return view('web.bodywork.nutrition');
    }
    public function integralSomaticTherapy(){
        return view('web.bodywork.integral-somatic-therapy');
    }

    // Energywork
    public function meditation(){
        return view('web.energywork.mindsutra-meditation');
    }
    public function music(){
        return view('web.energywork.mindsutra-music');
    }
    public function art(){
        return view('web.energywork.mindsutra-art');
    }

    // Blogs
    public function blogs(){
        return view('web.blogs');
    }
    public function blog1(){
        return view('web.blog.abcd-of-assertiveness-a-coping-mantra');
    }
    public function blog2(){
        return view('web.blog.how-non-violence-transformed-gandhi-into-mahatma');
    }
    public function blog3(){
        return view('web.blog.a-confident-yes-and-firm-no-the-alchemists-of-life');
    }
    public function blog4(){
        return view('web.blog.the-foundation-stone-of-parent-child-relationship');
    }
    public function blog5(){
        return view('web.blog.aura-of-ahimsa');
    }
    public function blog6(){
        return view('web.blog.compromise-to-clarity');
    }
    public function blog7(){
        return view('web.blog.dangerous-knowledge');
    }
    public function blog8(){
        return view('web.blog.jugaad-or-bigaad-musings-on-ethical-fading-in-society');
    }
    public function blog9(){
        return view('web.blog.a-question-that-can-save-a-life');
    }
    public function blog10(){
        return view('web.blog.embrace-the-possible');
    }
    public function blog11(){
        return view('web.blog.difference-between-passion-and-indulgence');
    }
    public function blog12(){
        return view('web.blog.non-stealing-of-ideas');
    }
    public function blog13(){
        return view('web.blog.non-stealing-of-our-dreams');
    }
    public function blog14(){
        return view('web.blog.non-stealing-of-space');
    }
    public function blog15(){
        return view('web.blog.sync-with-the-universe');
    }
    public function blog16(){
        return view('web.blog.creativity');
    }
    public function blog17(){
        return view('web.blog.paradox-of-rising-expectations');
    }
    public function blog18(){
        return view('web.blog.materialistic-things-and-inner-light');
    }
    public function blog19(){
        return view('web.blog.take-care-of-life');
    }
    public function blog20(){
        return view('web.blog.aparigraha-non-possessiveness-of-our-comfort-zone');
    }
    public function blog21(){
        return view('web.blog.meditate-to-connect-to-your-true-self');
    }
    public function blog22(){
        return view('web.blog.presence-of-mind');
    }
    public function blog23(){
        return view('web.blog.purity-in-diet');
    }
    public function blog24(){
        return view('web.blog.as-a-man-thinketh');
    }
    public function blog25(){
        return view('web.blog.achieve-the-unthinkable');
    }
    public function blog26(){
        return view('web.blog.cultivate-the-flowers-and-fruits-of-right');
    }
    public function blog27(){
        return view('web.blog.a-pure-hearted-friend');
    }
    public function blog28(){
        return view('web.blog.a-super-force-beyond-our-wildest-dreams');
    }
    public function blog29(){
        return view('web.blog.coffee-with-creativity');
    }
    public function blog30(){
        return view('web.blog.the-complete-picture');
    }
    public function blog31(){
        return view('web.blog.move-towards-the-goal');
    }
    public function blog32(){
        return view('web.blog.when-likes-are-not-enough');
    }
    public function blog33(){
        return view('web.blog.is-tapas-a-path-to-inner-peace');
    }
    public function blog34(){
        return view('web.blog.arunima-sinha-story');
    }
    public function blog35(){
        return view('web.blog.the-word-tapas-means-fire');
    }
    public function blog36(){
        return view('web.blog.repetition-of-positive-motivating-behaviour');
    }
    public function blog37(){
        return view('web.blog.need-of-self-introspection');
    }
    public function blog38(){
        return view('web.blog.surrender-to-the-divine-completely');
    }
    public function blog39(){
        return view('web.blog.speak-to-your-inner-voice');
    }
    public function blog40(){
        return view('web.blog.surrendering-completely-to-the-universe');
    }
    public function blog41(){
        return view('web.blog.trust-in-our-god');
    }
    public function blog42(){
        return view('web.blog.listen-to-you-inner-voice');
    }

    // Social Media
    public function workshopReviews(){
        return view('web.social-media.workshop-reviews');
    }
    public function gallery(){
        return view('web.social-media.gallery');
    }
    public function youtube(){
        return view('web.social-media.youtube');
    }
    public function bookReviews(){
        return view('web.social-media.book-reviews');
    }

    // Know Us
    public function mindsutra(){
        return view('web.know-us.mindsutra');
    }
    public function knowTheAuthors(){
        return view('web.know-us.know-the-authors');
    }
    public function knowTheSpeakers(){
        return view('web.know-us.know-our-speakers');
    }
    public function knowSupportTeam(){
        return view('web.know-us.know-our-support-team');
    }
    public function contactUs(){
        return view('web.know-us.contact-us');
    }
    public function sendMessage(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'mobile' => ['required', 'string', 'max:255'],
            'msg' => ['required'],
        ]);

        if($validator->fails()){
            return back()->with('error', $validator->messages());
        }

        $contact = new Contact([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'message' => $request->msg,
        ]);
        $result = $contact->save();

        if(!is_null($result)){
            $mailData = [
                'title' => 'New Contact',
                'name' => $contact->name,
                'email' => $contact->email,
                'mobile' => $contact->mobile,
                'message' => $contact->message,
            ];
            $ccEmails = ["drshaifaligupta1@gmail.com", "mindgram.in@gmail.com"];
            $bccEmails = ["h.paladugu@docwebindia.com", "developer2.dwi@gmail.com"];
            Mail::to('hello@themindsutra.com', 'Hello Mindsutra')->send(new ContactMail($mailData))->cc($ccEmails)->bcc($bccEmails);

            Mail::to($request->verify_email, $request->patient_name)->send(new ContactConfirmationMail());

            return back()->with('success', 'Your message has been sent successfully!');
        }else{
            return back()->with('error', 'Something went wrong! Please try again later.');
        }
    }
    public function allEvents(){
        $events = Event::all();
        return view('web.events', ['events' => $events]);
    }
    public function allWorkshops(){
        $events = Event::where('event_type', 'Workshop')->get();
        return view('web.workshop', ['events' => $events]);
    }
    public function eventRegistration(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'mobile' => ['required', 'string', 'max:255'],
        ]);

        if($validator->fails()){
            return back()->with('error', $validator->messages());
        }

        $reg = new Eventregistration([
            'event_id' => $request->event,
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
        ]);
        $result = $reg->save();

        $event = Event::where('id', $request->event)->first();
        if(!is_null($result)){
            $mailData = [
                'title' => 'New Registration for Event',
                'event' => $event->title,
                'name' => $reg->name,
                'email' => $reg->email,
                'mobile' => $reg->mobile,
                'message' => $reg->message,
            ];
            $ccEmails = ["drshaifaligupta1@gmail.com", "mindgram.in@gmail.com"];
            $bccEmails = ["h.paladugu@docwebindia.com", "developer2.dwi@gmail.com"];
            Mail::to('hello@themindsutra.com', 'Hello Mindsutra')->send(new EventRegistrationMail($mailData))->cc($ccEmails)->bcc($bccEmails);

            Mail::to($request->verify_email, $request->patient_name)->send(new EventRegistrationConfirmationMail());

            return back()->with('success', 'Your message has been sent successfully!');
        }else{
            return back()->with('error', 'Something went wrong! Please try again later.');
        }
    }
}
