<?php

namespace App\Http\Controllers;

use App\Models\MobileLegends;
use Illuminate\Http\Request;
use App\Models\ListCompetition;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MobileLegendsController extends Controller
{
    public function create() {

        $user = MobileLegends::where('email', Auth::user()->email)->first();
        $count_user = MobileLegends::all()->count();
        $competition = ListCompetition::where('competition', 'MobileLegends')->first();
        
        if($count_user >= $competition['limit']) {
            return back()->with("error", "Sorry, we were out of slot");   
        }

        if ($user) {
            return back()->with("error", "You have registered for the Mobile Legends competition");   
        }
        
        $data = [
            "title" => $competition['competition'] . " Registration | SI FEST",
            "nav" => [
                "active" => 'Registration', 
            ],
            "competition" => $competition,  
            "assets" => "Form",
        ];
        
        return view("web/registration/".strtolower($competition['competition']), $data);

        // if registration closed
        // return back()->with("error", "Sorry, registration closed");  
    }
    
    public function registration (Request $request) {

        $validation = $request->validate([
            "team_name" => "required", "string",
            "email" => "required", "string", "email:dns", "unique:users",
                
            "name1" => "required", "string",
            "phone_number1" => "required", "numeric", "min:11", "max:15",
            "line1" => "required", "string", 
            "institution1" => "required", "string", 
            "idcard1" => "required", "image", "mimes:jpeg,png,jpg,gif,svg", "max:2048",
            "id_mole1" => "required", "string", "max:9", "min:9",
            "server_mole1" => "required", "string", "max:4", "min:4",
                
            "name2" => "required", "string",
            "phone_number2" => "required", "numeric", "min:11", "max:15",
            "line2" => "required", "string", 
            "institution2" => "required", "string", 
            "idcard2" => "required", "image", "mimes:jpeg,png,jpg,gif,svg", "max:2048",
            "id_mole2" => "required", "string", "max:9", "min:9",
            "server_mole2" => "required", "string", "max:4", "min:4",
                
            "name3" => "required", "string",
            "phone_number3" => "required", "numeric", "min:11", "max:15",
            "line3" => "required", "string", 
            "institution3" => "required", "string", 
            "idcard3" => "required", "image", "mimes:jpeg,png,jpg,gif,svg", "max:2048",
            "id_mole3" => "required", "string", "max:9", "min:9",
            "server_mole3" => "required", "string", "max:4", "min:4",
                
            "name4" => "required", "string",
            "phone_number4" => "required", "numeric", "min:11", "max:15",
            "line4" => "required", "string", 
            "institution4" => "required", "string", 
            "idcard4" => "required", "image", "mimes:jpeg,png,jpg,gif,svg", "max:2048",
            "id_mole4" => "required", "string", "max:9", "min:9",
            "server_mole4" => "required", "string", "max:4", "min:4",
                
            "name5" => "required", "string",
            "phone_number5" => "required", "numeric", "min:11", "max:15",
            "line5" => "required", "string", 
            "institution5" => "required", "string", 
            "idcard5" => "required", "image", "mimes:jpeg,png,jpg,gif,svg", "max:2048",
            "id_mole5" => "required", "string", "max:9", "min:9",
            "server_mole5" => "required", "string", "max:4", "min:4",
                
            "payment" => "required", "image", "mimes:jpeg,png,jpg,gif,svg", "max:2048",
        ]);

        if(
            $request->file('idcard1') && $request->file('idcard2') && 
            $request->file('idcard3') && $request->file('idcard4') && 
            $request->file('idcard5') && $request->file('payment')
        ){
            $idcard1 = $request->file('idcard1');
            $fileidcard1 = date('YmdHi').".".$idcard1->getClientOriginalName();
            $idcard1->move(public_path('idcard'), $fileidcard1);
            $validation['idcard1'] = $fileidcard1;
            
            $idcard2 = $request->file('idcard2');
            $fileidcard2 = date('YmdHi').".".$idcard2->getClientOriginalName();
            $idcard2->move(public_path('idcard'), $fileidcard2);
            $validation['idcard2'] = $fileidcard2;

            $idcard3 = $request->file('idcard3');
            $fileidcard3 = date('YmdHi').".".$idcard3->getClientOriginalName();
            $idcard3->move(public_path('idcard'), $fileidcard3);
            $validation['idcard3'] = $fileidcard3;
            
            $idcard4 = $request->file('idcard4');
            $fileidcard4 = date('YmdHi').".".$idcard4->getClientOriginalName();
            $idcard4->move(public_path('idcard'), $fileidcard4);
            $validation['idcard4'] = $fileidcard4;
            
            $idcard5 = $request->file('idcard5');
            $fileidcard5 = date('YmdHi').".".$idcard5->getClientOriginalName();
            $idcard5->move(public_path('idcard'), $fileidcard5);
            $validation['idcard5'] = $fileidcard5;
            
            $payment = $request->file('payment');
            $filepayment = date('YmdHi').".".$payment->getClientOriginalName();
            $payment->move(public_path('payment'), $filepayment);
            $validation['payment'] = $filepayment;

            $validation['name1'] = ucwords(strtolower($request->name1));
            $validation['name2'] = ucwords(strtolower($request->name2));
            $validation['name3'] = ucwords(strtolower($request->name3));
            $validation['name4'] = ucwords(strtolower($request->name4));
            $validation['name5'] = ucwords(strtolower($request->name5));
            
            $MobileLegends = new MobileLegends($validation);

            $MobileLegends->save();

            return redirect()->intended('dashboard')->with("success", "Registration is successful, wait for verification from admin");
        }

        return back()->with("error", "Registration failed, try again");
    }
    
}
