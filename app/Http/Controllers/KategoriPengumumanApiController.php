<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriPengumumanApiController extends Controller
{
     /** 
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */ 
    public function index()
    {
        $kategoripengumumans=KategoriPengumuman::all();
        return $kategoripengumumans->toJson();
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
        $kategoripengumuman=KategoriPengumuman::create($input);
        return $kategoripengumuman;
    }

    /**
     * Display the spwcified resource.
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategoripengumuman=KategoriPengumuman::find($id);
        return $kategoripengumuman;
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
        $kategoripengumuman=KategoriPengumuman::find($id);
        if(empty($kategoripengumuman)){
            return response()->json(['message'=>'data tidak ditemukan'],404);
        }
        $kategoripengumuman->update($input);
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategoripengumuman=KategoriPengumuman::find($id);
        if(empty($kategoripengumuman)) {
            return response()->json(['message'=>'data tidak ditemukan'], 404);
        }
        $kategoripengumuman->delete();
        return response()->json(['message'=>'data telah dihapus']);
    }
}
