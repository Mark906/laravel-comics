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

Route::get('/', function () {
    $comics = config('comics');
    $data = [
        'series' => $comics
    ];
    return view('home', $data);
})->name('homepage');

Route::get('/comic/{id}', function($id) { //id sarà un parametro dinamico.

    // recupero tutti i fumetti e li salvo in $comics.
    $comics = config('comics');
    // verifico che l'id sia una chiave valida
    if(array_key_exists($id, $comics)) { // cerco nell'array comics l'id.

        // recupero il fumetto corrispondente all'id presente nell'url.
        $fumetto = $comics[$id];
        $data = [ // passo 'comic' alla view attraverso $data, contenente l'array $fumetto.
            'comic' => $fumetto
        ];
        return view('single', $data);
    }
    abort(404); // se non entra nell'if allora via 'abort' mostro la pagina errore 404.
})->name('comic-details');
