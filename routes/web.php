<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Models\Usuario;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/cadastrar-usuario', function(Request $request){
    //dd($request->all());

    Usuario::create([
        'nome' => $request->nome,
        'telefone' => $request->telefone,
        'origem' => $request->origem,
        'data' => $request->data,
        'observacoes' => $request->observacoes
    ]);

    echo "Usuário criado com sucesso!";
});

Route::get('/listar-usuario/{id}', function($id){
    //dd(Usuario::find($id)); //debug and die
    $usuario = Usuario::find($id);
    return view('listar', ['usuario' => $usuario]);
});

Route::get('/editar-usuario/{id}', function($id){
    //dd(Usuario::find($id)); //debug and die
    $usuario = Usuario::find($id);
    return view('editar', ['usuario' => $usuario]);
});

Route::post('/editar-usuario/{id}', function(Request $request, $id) {
    //dd($request->all());
    $usuario = Usuario::find($id);

    $usuario->update([
        'nome' => $request->nome,
        'telefone' => $request->telefone,
        'origem' => $request->origem,
        'data' => $request->data,
        'observacoes' => $request->observacoes
    ]);

    echo "Usuário editado com sucesso!";
});

Route::get('/excluir-usuario/{id}',function($id){
    //dd($request->all());
    $usuario = Usuario::find($id);
    $usuario->delete();

    echo "Usuário excluído com sucesso!";
});