<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorPrimo extends Controller
{
    public function create(){

        return view('PrimoFormulario');

    }

    public function store(Request $request){

        $num1=$request->num1;

        $c = 0;
        for($i = 1; $i <= $num1; $i++){
            if($num1 % $i == 0){
                $c++;
            }
        }
            if($c==2){
                return "Es primo";
            }
                else{
                    return "No es primo";
                }






    }
}
