<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PatientLogin extends Controller
{

    /**
     * Login Patient 
     */
    public function login(Request $request)
    {
        $this -> validate($request, [
            'email' =>  'required|email',
            'password' =>  'required|min:6'
        ]);



        if( Auth::guard('patient') -> attempt(['email' => $request -> email, 'password' => $request -> password]) ){

            return redirect('/patient/dashboard'); 

        }else {
            return back() -> with('warning', 'Wrong Email or Password');
        }






    }



}
