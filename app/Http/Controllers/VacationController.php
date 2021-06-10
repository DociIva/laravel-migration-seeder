<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VacationController extends Controller
{
    //Archivio case

    public function index() {
       
        return view('vacations');
    }
}
