<?php

namespace App\Http\Controllers;

use App\PagesModels\LandingHiEuropaModel;
use Illuminate\Http\Request;

class LandingHiEuropaController extends Controller
{
    public function index()
    {
        $hiEuropa = LandingHiEuropaModel::latest()->first();
        return view('landing_hi_europa',["hiEuropa"=>$hiEuropa]);
        
        return view('landing_hi_europa');
    }
    
}
