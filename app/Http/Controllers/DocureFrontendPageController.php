<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocureFrontendPageController extends Controller
{
    /**
     * Show Home Page 
     */
    public function showHomePage()
    {
        return view('docure.pages.home');
    }
    
    /**
     * Show Home Page 
     */
    public function showLoginPage()
    {
        return view('docure.pages.login');
    }

    

    /**
     * Show Home Page 
     */
    public function showPatientRegPage()
    {
        return view('docure.pages.patient.register');
    }

     /**
     * Show Home Page 
     */
    public function showDoctorRegPage()
    {
        return view('docure.pages.doctor.register');
    }

    /**
     * Show Home Page 
     */
    public function showPatiendDashboard()
    {
        return view('docure.pages.patient.dashboard');
    }

    /**
     * Show Home Page 
     */
    public function showDoctorDashboard()
    {
        return view('docure.pages.doctor.dashboard');
    }

    
}

