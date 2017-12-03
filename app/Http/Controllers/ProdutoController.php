<?php
namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request
     * @return Response
     */
    public function index()
    {
        $produtos = Produto::orderBy('id','DESC')->paginate(5);
        var_dump($produtos);die;
        return view('home.index',compact('items'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'codigoProduto'     => 'required|numeric',
            'nomeProduto'       => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('produtos')
                ->withErrors($validator)
                ->withInput(Input::except('codigoProduto'));
        } else {
            // store
            $produto = new Produto();
            $produto->NMPRODUTO      = Input::get('nomeProduto');
            $produto->CDPRODUTO      = Input::get('codigoProduto');
            $produto->save();

            // redirect
            Session::flash('message', 'Produto cadastrado com sucesso.');
            return Redirect::to('produtos');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}