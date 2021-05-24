<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;
use App\Models\Federacao;
use App\Models\Estado;

use Illuminate\Support\Facades\Redirect;

class EmpresasController extends Controller
{
    public function index(){
        $enterprises = Empresa::get();
        
        //$enterprises = Empresa::with('federacao')->get();
        //dd($empresas);
        
        //dd($empresas);
    //return view('produtos', compact('enterprises'));
        return view('empresas.list', ['enterprises' => $enterprises]);
    }

    public function new(){
        return view('empresas.form');
    }
    public function add(Request $request){
        //dd('vou cadastrar');
        $empresa = new Empresa;
        $empresa->nome=$request->nome;
        $empresa->federacao_id= $request->federacao_id;
        
        $empresa->save();

        //$empresas->federacao_id = $request

        return Redirect::to('/empresas');

    }
    
    public function pesquisar(Request $request)
   {

     $texto = $request->texto;
     if ($request->has('texto')){
        $pesquisa = Empresa::where('nome', 'LIKE', '%' . $request->texto . '%');
     }

     return $pesquisa;
     //$status = Input::get('status');
        
   }
    
}
