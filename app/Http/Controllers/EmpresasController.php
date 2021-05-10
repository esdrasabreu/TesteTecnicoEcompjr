<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;
use App\Models\Federacao;
use Illuminate\Support\Facades\Redirect;

class EmpresasController extends Controller
{
    public function index(){
        $empresas = Empresa::get();
        
        //$empresas = Empresa::with('federacao')->get();
        
        //dd($empresas);
    //return view('produtos', compact('prod'));
        return view('empresas.list', ['empresas' => $empresas]);
    }

    public function new(){
        return view('empresas.form');
    }
    public function add(Request $request){
        
        $empresa = new Empresa;
        $empresa->nome=$request->nome;
        $empresa->federacao_id=$request->federacao_id;
        
        $empresa->save();

        //$empresas->federacao_id = $request

        return Redirect::to('/empresas');

    }
}
