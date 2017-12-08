<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Produto;
use PhpParser\Node\Scalar\String_;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produto::orderBy('CDPRODUTO','ASC')->paginate(5);
        return view('gestao.vendas.produtos',compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gestao.vendas.produtos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'CDPRODUTO' => 'required',
            'NMPRODUTO' => 'required'
        ]);

        Produto::create($request->all());

        return redirect()->route('produtos')->with('success','Produto cadastrado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produto = Produto::find($id);
        return view('gestao.vendas.produtos',compact('produto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produto = Produto::find($id);

        return view('gestao.vendas.produtos',compact('produto'));
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
        $this->validate($request, [

            'video_title' => 'required',

            'video_url' => 'required',

        ]);


        Produto::find($id)->update($request->all());

        return redirect()->route('produtos.index')

            ->with('success','Produto editado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Produto::find($id)->delete();

        return redirect()->route('produtos.index')

            ->with('success','Produto deletado com successo');
    }

    /**
     * Display the specified resource.
     *
     * @param  String $cod
     * @return \Illuminate\Http\Response
     */
    public function searchCDPRODUTO($cod)
    {
        $resultado = DB::table('produtos')
            ->select(DB::raw('COUNT(produtos.id) as produtosCadastrados'))
            ->where('produtos.CDPRODUTO', '=', $cod)
            ->groupBy('produtos.id')
            ->get();

        // Se trouxer algum resultado, ele estará em $resultado[0]
        if(isset($resultado[0]))
            $existeProduto = true;
        else
            $existeProduto = false;

        return $this->resposta(array($existeProduto));
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function produtosCadastrados()
    {
        $resultado = DB::table('produtos')
            ->select(DB::raw('COUNT(produtos.id) as produtosCadastrados'))
            ->get();

        $resultado = $resultado[0]->produtosCadastrados;

        return compact('resultado');

    }

    /**
     * Display the specified resource.
     *
     * @param String $returnType
     * @param array $array
     * @param String $view
     * @return \Illuminate\Http\Response
     */
    public function resposta($array, $returnType = 'json', $view = 'produtos'){
        if($returnType == "json")
            return response()->json($array);
        else
            return view($view, $array);

    }
}
