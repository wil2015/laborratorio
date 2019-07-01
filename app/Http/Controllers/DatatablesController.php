<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;

use App\Equipamento;
use App\Historico;



class DatatablesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

    /**
 * Displays datatables front end view
 *
 * @return \Illuminate\View\View
 */
public function getIndex()
{
    return view('datatables.index');
}

/**
 * Process datatables ajax request.
 *
 * @return \Illuminate\Http\JsonResponse
 */
public function anyData()
{
   return Datatables::of(Equipamento::query())->make(true);
   
}

public function getMaster()
{
   // return view('datatables.eloquent.master');
   return view('datatables.eloquent.index');
}

public function getMasterData()
{
    $equipamento = Equipamento::all();
    $equipamento = DB::table('equipamentos')->select('id', 'nome', 'descricao',  'acao')->get();


    //print_r($equipamento); return;
    $data['data'] = $equipamento;
    //var_dump(count($data['data']));
    //var_dump($data['data'][0] -> id2 = 666);
    //print_r($data['data'][0]); return;

    for ($i=0; $i < count($data['data']); $i++) { 

        $botao = '<a href="/equipamento/' . $data['data'][$i] -> id . '/edit"' . ' class="btn-sm btn-success">Editar</a>'; 
        $data['data'][$i] -> acao2 = $botao;
        $data['data'][$i] -> details_url = url('detalhe/' . $data['data'][$i] ->id);
        # code...
    }
   // print_r($data); return;

  
    return json_encode($data);
    

    return Datatables::of($equipamento)
        ->addColumn('details_url', function($equipamento) {
  //          return url('eloquent/details-data/' . $user->id);
            return url('detalhe/' . $equipamento->id);

        })
        ->make(true);

}

public function getDetailsData($id)
{
     $posts = Historico::where('equipamento_id', $id) ->get();

    
    return Datatables::of($posts)->make(true);
} 

}
