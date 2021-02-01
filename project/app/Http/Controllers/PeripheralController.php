<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peripheral;

class PeripheralController extends Controller
{
    public function index() {     
        $peripherals = Peripheral::all();
        //dd($peripherals);
        return view('pages.PeripheralHome', compact('peripherals'));
    }

    public function show($id) {
        $peripheral = Peripheral::FindOrFail($id);
        return view('pages.PeripheralDetail', compact('peripheral'));
    }
}  
