<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pmk, App\Puskesmas;
class JSONController extends Controller
{
    //
    public function puskesmas_all()
    {
    	return Puskesmas::all();
    }

    public function pmk_all()
    {
    	return Pmk::all();
    }
}
