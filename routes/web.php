<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
})->name('home');
Route::get('/news', function () {
    return view('pages.news');
})->name('news');
Route::get('/about', function () {
    return view('pages.about');
})->name('about');
Route::get('/master-class', function () {
    return view('pages.masterClass');
})->name('master-class');
Route::get('/sponsor', function () {
    return view('pages.sponsor');
})->name('sponsor');
Route::get('/contact', function (){
   return view('pages.contact');
})->name('contact');
Route::get('/juri', function (){
   $juri = \App\Models\Jury::all();
   return view('pages.juri', compact('juri'));
})->name('juri');
Route::get('/news', function (){
   $news = \App\Models\News::all();
   return view('pages.news', compact('news'));
})->name('news');
Route::get('/news/{id}', function (Request $request){
    $id = $request->id;
    $news = \App\Models\News::query()->where('id', '=', $id)->get();
    return view('pages.newsId', compact('news'));
});
