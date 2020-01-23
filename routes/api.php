<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::apiResource('artikel', 'ArtikelAPIController');
Route::apiResource('berita', 'BeritaAPIController');
Route::apiResource('galeri', 'GaleriAPIController');
Route::apiResource('pengumuman', 'PengumumanAPIController');
Route::apiResource('kategoriartikel', 'KategoriArtikelAPIController');
Route::apiResource('kategoriberita', 'KategoriBeritaAPIController');
Route::apiResource('kategorigaleri', 'KategoriGaleriAPIController');
Route::apiResource('kategoripengumuman', 'KategoriPengumumanAPIController');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
