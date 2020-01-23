<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriArtikelApiController extends Controller
{
    /** 
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */ 
    public function index()
    {
        $kategoriartikels=KategoriArtikel::all();
        return $kategoriartikels->toJson();
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
        $kategoriartikel=KategoriArtikel::create($input);
        return $kategoriartikel;
    
    }

    /**
     * Display the spwcified resource.
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategoriartikel=KategoriArtikel::find($id);
        return $kategoriartikel;
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
        $kategoriartikel=KategoriArtikel::find($id);
        if(empty($kategoriartikel)){
            return response()->json(['message'=>'data tidak ditemukan'],404);
        }
        $kategoriartikel->update($input);
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategoriartikel=KategoriArtikel::find($id);
        if(empty($kategoriartikel)) {
            return response()->json(['message'=>'data tidak ditemukan'], 404);
        }
        $kategoriartikel->delete();
        return response()->json(['message'=>'data telah dihapus']);
    }
}
