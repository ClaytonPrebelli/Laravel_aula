<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

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
    $helloWorld = 'Hello caraio';
    return view('welcome', ['x' => $helloWorld]);
});
Route::get('/model',function(){

//   $user = new \App\Models\User();
//   $user->name='Usuário Teste editado';
 //  $user->email = 'email@teste.com';
 //  $user->password = bcrypt('12345678');
 //  return $user->save();

    User::create([
        'name'=> 'Prebelli atualizado',
        'email'=> 'clayton.preblli.pires@prebelli.online',
        'password'=> bcrypt('Mistic@1708')
    ]);

    return User::all();

});
