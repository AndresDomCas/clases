<?php

namespace App\Http\Controllers\crud;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/* Tabla crud_example */
use App\Models\CrudExample;

class Crud extends Controller
{
    public function index(){
        $datos = CrudExample::all();
        return view('Crud/index')->with(['data'=>$datos]);
    }

    public function create(){
        return view('Crud.create');
    }

    public function store(Request $request){
        $validate = $request->validate([
            'dato1'=>'required|max:255',
            'dato2'=>'required|max:255',
        ]);

        CrudExample::create($validate);

        return url('/crud');
    }
}
