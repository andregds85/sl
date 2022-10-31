<?php

namespace App\Http\Controllers;

use App\Models\Terrestre;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
  
    function __construct()
    {
         $this->middleware('permission:administrador-list|administrador-create|administrador-edit|administrador-delete', ['only' => ['index','show']]);
         $this->middleware('permission:administrador-create', ['only' => ['create','store']]);
         $this->middleware('permission:administrador-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:administrador-delete', ['only' => ['destroy']]);
    }
    
    public function index()
    {
      return view('hospital.index');

    }
   

    public function create()
    {


    }
   
    public function store(Request $request)
    {
        request()->validate([
               
        ]);    
        Checklist::create($request->all());
        echo  "<script>
        alert( 'Sucesso, Cadastro efetuado com Sucesso !' );
             </script>";

        return view('monitoramento.index');
  
    }


    
}

