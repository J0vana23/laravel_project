<?php

use Illuminate\Support\Facades\Route;

use App\Models\Produto;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/cadastrar-usuario', function(Request $request){

    Produto::create([
        'nome' =>$request->nome,
        'telefone' =>$request->telefone,
        'origem' =>$request->origem,
        'data' =>$request->data,
        'observacao' =>$request->observacao
    ]);
    return redirect('/')->with('success', 'Usuário cadastrado com sucesso!');
});


Route::get('/listar-usuarios', function(){
    //dd(Produto::find($id)); //debug and die
    $produtos = Produto::all();
    return view('consultar', ['produtos' => $produtos]);
});

Route::get('/listar-usuario/{id}', function($id){
    //dd(Produto::find($id)); //debug and die
    $produto = Produto::find($id);
});

Route::get('/editar-usuario/{id}', function($id){
    //dd(Produto::find($id)); //debug and die
    $produto = Produto::find($id);
    return view('editar', ['produto' => $produto]);
});

Route::post('/editar-usuario/{id}', function(Request $request, $id){
     //dd($request->all());
    $produto = Produto::find($id);

    $produto->update([
        'nome' =>$request->nome,
        'telefone' =>$request->telefone,
        'origem' =>$request->origem,
        'data' =>$request->data,
        'observacao' =>$request->observacao
    ]);

    return redirect('/listar-usuarios')->with('success', '');

});

Route::delete('/excluir-usuario/{id}', function($id){
    //dd(Produto::find($id)); //debug and die
    $produto = Produto::find($id);
    $produto ->delete();
    
    return redirect('/listar-usuarios')->with('success', 'Produto excluído com sucesso!');
});


