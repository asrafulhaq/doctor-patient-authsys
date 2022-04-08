<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PatientRegister extends Controller
{


    /**
     * Patient Register system 
     */
    public function register(Request $request)
    {
        
        $this -> validate($request , [
            'name'  =>  'required',
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);


        Patient::create([
            'name'      => $request -> name, 
            'email'     => $request -> email, 
            'password'  => Hash::make($request -> password)
        ]);

        return back() -> with('success', 'Patient account created sucessful !');


    }




}
