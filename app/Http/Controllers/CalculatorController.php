<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function plus(float $n1, $n2){
        return $n1 + $n2;
    }

    public function testAPI() {
        $data = '{"word" : "hello"}';
        // dump(json_decode($data));
        return json_decode($data);
    }
}


