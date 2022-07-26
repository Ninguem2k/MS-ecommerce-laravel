<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index()
    {
        $Nome = "Cássio";
        $idade = 22;
        $arr = [10, 20, 30, 40, 50];
        $nomes = ["matheus", "Barbara", "gaby", "theiago"];
        return view('Home', [
            'Nome' => $Nome,
            'idade' => $idade,
            'Profissão' => "Estagiario",
            'arr' => $arr,
            'nomes' => $nomes
        ]);
    }
}
