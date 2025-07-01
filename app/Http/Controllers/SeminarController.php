<?php

namespace App\Http\Controllers;

use App\Models\Seminar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class SeminarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    private $preTeraMax = 5;
    private $TeraMax = 15;
    private $preGigaMax = 15;
    private $GigaMax = 210;

    public function index()
    {
        $data = [
            "title" => "Seminar | SI FEST",
            "nav" => [
                "active" => 'Seminar', 
            ],
            "assets" => 'Seminar',
        ];

        return view("web/seminar/seminar", $data);
    }

    public function create() 
    {
        $user = Seminar::where('email', Auth::user()->email)->first();
        $count_user_tera = Seminar::where('type', "Tera")->count();
        $count_user_giga = Seminar::where('type', "Giga")->count();

        $slot_user_tera = $this->preTeraMax - $count_user_tera;
        $slot_user_giga = $this->preGigaMax - $count_user_giga;

        if($count_user_tera >= $this->preTeraMax && $count_user_giga >= $this->preGigaMax) {
            return back()->with("error", "Sorry, we were out of slot! stay tuned, more information on instragram @sifest.unsri");   
        }
        
        if ($user) {
            return back()->with("error", "You have registered for the Seminar");   
        }
        
        $data = [
            "title" => " Registration | SI FEST",
            "nav" => [
                "active" => 'Registration', 
            ],
            "slot" => [
                "tera" => $slot_user_tera,
                "giga" => $slot_user_giga,
            ], 
            "assets" => "Form",
        ];
        
        return view("web/registration/seminar", $data);

        // if registration closed
        // return back()->with("error", "Sorry, registration closed");  
    }

    public function registration (Request $request) 
    {
        $validation = $request->validate([
            "name" => "required", "string",
            "email" => "required", "string", "email:dns", "unique:users",
            "phone_number" => "required", "numeric", "min:11", "max:15",
            "line" => "required", "string",
            "type" => "required",
            "metode" => "required",
            "payment" => "required", "image", "mimes:jpeg,png,jpg,gif,svg", "max:2048",
        ]);

        if($request->file('payment')){
            $payment = $request->file('payment');
            $filepayment = date('YmdHi').".".$payment->getClientOriginalName();
            $payment->move(public_path('payment'), $filepayment);
            $validation['payment'] = $filepayment;
            
            $validation['name'] = ucwords(strtolower($request->name));

            $Seminar = new Seminar($validation);

            $Seminar->save();

            return redirect()->intended('dashboard')->with("success", "Registration is successful, wait for verification from admin");
        }

        return back()->with("error", "Registration failed, try again");
    }
    
    public function registrationOTS (Request $request) 
    {
        $validation = $request->validate([
            "name" => "required", "string",
            "email" => "required", "string", "email:dns", "unique:users",
            "phone_number" => "required", "numeric", "min:11", "max:15",
            "line" => "required", "string",
            "type" => "required",
            "verification" => "required",
            "metode" => "required",
        ]);
        
        $validation['name'] = ucwords(strtolower($request->name));
        $Seminar = new Seminar($validation);
        $Seminar->save();
        return redirect()->intended('/sifest2022/admin/seminar')->with("success", "Registration is successful, wait for verification from admin");
    }
}
