<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class DetailController extends Controller
{

   

    public function index($id){

        $myCars = Car::all();

        return view('carDetail', ['carId' => $id],['myCars' => $myCars]);
    }
}
