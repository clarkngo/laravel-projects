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

// we don't want to do this everytime, Laravel did the heavylifting
/*
class Route {
    static function get () {

    }
}
*/




Route::get('/', function () {
    return view('home');
});


Route::get('/cali', function () {
    return view('cali');
});

Route::get('/item', function () {
    return view('item');
});
/*
Route::post('/', function () {
    return "You are in a post request";
});
*/
Route::post('/post', function (\Illuminate\Http\Request $request) {
    return 'Hey ' . $request->input('my-name');
});

