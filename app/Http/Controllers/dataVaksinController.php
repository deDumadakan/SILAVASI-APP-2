<?php

namespace App\Http\Controllers;

use App\Models\DataVaksin;
use Illuminate\Http\Request;

class dataVaksinController extends Controller
{
    public function index()
    {
        return view('dataVaksin.index',[
            "dataVaksins" => DataVaksin::all()
        ]);
    }
    public function create()
    {
        return view('dataVaksin.create');
    }
    

}
