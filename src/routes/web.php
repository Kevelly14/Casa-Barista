<?php

use App\Http\Controllers\Site\CardapioController;
use App\Http\Controllers\Site\ContatoController;
use App\Http\Controllers\Site\EventosController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\SobreController;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BannerController;

use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/sobre', [SobreController::class, 'sobre'])->name('sobre');

Route::get('/cardapio', [CardapioController::class, 'cardapio'])->name('cardapio');
Route::get('/cardapio/categoria/{idCategoria}', [CardapioController::class, 'cardapio'])->name('cardapio.categoria');

Route::get('/eventos', [EventosController::class, 'eventos'])->name('eventos');
Route::get('/contato', [ContatoController::class, 'contato'])->name('contato');



//Conteúdo do DASHBOARD
//Estrutura para a área adminstrativa
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/admin/banners', [AdminController::class, 'index'])->name('admin.banner.index');