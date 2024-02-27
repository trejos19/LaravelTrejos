<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorNotas extends Controller
{
    public function create(){

        return view('NotasFormulario');

    }

    public function store(Request $request){
        $suma=0;
        $num1=$request->num1;
        $num2=$request->num2;
        $num3=$request->num3;

        $suma = $num1+$num2+$num3;

        return $suma/3;


    }

}
