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

    public function create() {
        return view('pages.PeripheralCreate');
    }
    public function store(Request $request) {
        //dd($request -> all());
        
        Peripheral::create($request -> all());
        /*
        $inputPrice = new Peripheral;
        $inputPrice -> price = $request -> get('price');
        $inputLen = strlen((string)$inputPrice);
        $floatInput = null;
        if ($inputLen <= 3 ) {
            $floatInput = $inputPrice * 100;
        }
        */
        return redirect() -> route('peripheral-index');
        
    }
}  
