<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{

    public function index(){
        $data = "Exemplo de dado retonado via GET";
        $var = "";
        $arr = [1,2,3,4,5];
        $nomes = ["João", "Matheus", "Guilherme", "Pedro", "Gustavo"];
        //Retornando dados via get
        return view('welcome', [
            'data' => $data, 
            'var' => $var,
            'arr' => $arr,
            'nomes' => $nomes]);
    }

    public function create(){
        return view('events.create');
    }

}

