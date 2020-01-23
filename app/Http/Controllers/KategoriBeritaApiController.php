<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriBeritaApiController extends Controller
{
     /** 
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */ 
    public function index()
    {
        $kategoriberitas=KategoriBerita::all();
        return $kategoriberitas->toJson();
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Htpp\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();
        $kategoriberita=KategoriBerita::create($input);
        return $kategoriberita;
    }

    /**
     * Display the spwcified resource.
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategoriberita=KategoriBerita::find($id);
        return $kategoriberita;
    }

    /**
     * update the specified resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Reaponse
     */
    public function update(Request $request, $id)
    {
        $input=$request->all();
        $kategoriberita=KategoriBerita::find($id);
        if(empty($kategoriberita)){
            return response()->json(['message'=>'data tidak ditemukan'],404);
        }
        $kategoriberita->update($input);
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategoriberita=KategoriBerita::find($id);
        if(empty($kategoriberita)) {
            return response()->json(['message'=>'data tidak ditemukan'], 404);
        }
        $kategoriberita->delete();
        return response()->json(['message'=>'data telah dihapus']);
    }
}
