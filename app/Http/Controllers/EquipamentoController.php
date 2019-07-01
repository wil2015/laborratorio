<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Equipamento;


class EquipamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('equipamento.index');



       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('equipamento.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        $ultimo = Equipamento::create($input);
       // $ultimo = DB::table('equipamentos')->select('id', 'acao')->get()->last();
        $botao = '<a href="/equipamento/' . $ultimo -> id . '/edit"' . ' class="btn-sm btn-success">Editar</a>'; 
       // $ultimo2 = Equipamento::find($ultimo -> id);

        $ultimo -> acao = $botao;
        $ultimo ->save();

       

     //   var_dump($ultimo->id); return;
        return  view('equipamento.index'); 
        
       // return redirect() -> back(); 
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $equipamento = Equipamento::find($id);
        return view('equipamento.edit', compact('equipamento'));
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        
        
        $equipamento = Equipamento::find($id)->update($request->all());
        return redirect() -> route('equipamento.index');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


public function getMasterData()
{
    $equipamento = Equipamento::all();
    $equipamento = DB::table('equipamentos')->select('id', 'nome', 'descricao',  'acao')->get();


    $data['data'] = $equipamento;
   

    for ($i=0; $i < count($data['data']); $i++) { 

        $botao = '<a href="/equipamento/' . $data['data'][$i] -> id . '/edit"' . ' class="btn-sm btn-success">Editar</a>'; 
        $botao2 = '<a href="/historico/' . $data['data'][$i] -> id . '"' . ' class="btn-sm btn-success">Adiciona Atividade</a>'; 

        $data['data'][$i] -> acao2 = $botao . ' ' . $botao2;
        $data['data'][$i] -> details_url = url('detalhehistorico/' . $data['data'][$i] ->id);
        # code...
    }
   

  
    return json_encode($data);
    

    

}

}
