<?php

use App\Http\Controllers\ProdutoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

require base_path('routes/auth/auth.php');
require base_path('routes/vendedores/vendedores.php');
require base_path('routes/produtos/produtos.php');
require base_path('routes/pedidos/pedidos.php');

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route::get('/pagamento-teste',[ProdutoController::class, 'teste']);

// Route::get('/success',function(){
//     return response()->json(['message' => 'success']);
// })->name('success');


// Route::get('/cancel',function(){
//     return response()->json(['message' => 'cancel']);
// })->name('cancel');