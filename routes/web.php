<?php

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

$colores = [
['nombre' =>'Rosado'],
['nombre'=>'Verde'],
['nombre'=>'Negro'],
['nombre'=>'Azul'],
];
Route::resource('colores','HomeController')->except(['index', 'show']);

//Route::get('/','HomeController@index')->name('Inicio');
//Route:: view('/', 'home',compact('colores'))->name('home');

//Route:: view('/contactanos', 'contactanos')->name('contactanos');
//Route:: view('/redessociales', 'redessociales')->name('redessociales');

//Route:: view ('/if', 'if')->name('if');
//Route:: view ('/si', 'si')->name('si');

Route:: get('e-control', function(){

	$lista=['cocom','navarrete','jose'];
	return view('e-control',['lista'=>$lista]);
})->name('e-control');


Route:: view ('/for', 'for')->name('for');

Route:: get('e-control', function(){

	$lista=['cocom','navarrete','jose'];
	return view('e-control',['lista'=>$lista]);
})->name('e-control');


//Route:: get('si', function(){

	//$edad=22;
	//return view('si',['edad'=>$edad]);
//})->name('si');

//Route:: get('else', function(){

	//$edad=15;
	//return view('else',['edad'=>$edad]);
//})->name('else');





/*Route::get('/', function () {
	$nombre="Juan";
    return view('home')->with('nombre',$nombre);
    return view('home', compact('nombre'));


}); ->name('home');
Route::get('/quienessomos', function () {
    return view("quienessomos");
});
Route::get('/contactanos', function () {
    return view("contactanos");
});
Route::get('/redessociales', function () {
    return view("redessociales");
});*/


