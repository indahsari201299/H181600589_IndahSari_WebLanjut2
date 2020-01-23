<?php

namespace App\Http\Controllers;

use \App\Artikel;
use Illuminate\Http\Request;

class ArtikelApiController extends Controller
{
    /** 
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */ 
    public function index()
    {
        $artikels=Artikel::all();
        return $artikels->toJson();
    }

    //tidak dipakai create dan edit//

    /**
     * Store a newly created resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Htpp\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();
        $artikel=Artikel::create($input);
        return $artikel;
    }

    /**
     * Display the spwcified resource.
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artikel=Artikel::find($id);
        return $artikel;
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
        $artikel=Artikel::find($id);
        if(empty($artikel)){
            return response()->json(['message'=>'data tidak ditemukan'],404);
        }
        $artikel->update($input);
        return response()->json($artikel);
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel=Artikel::find($id);
        if(empty($artikel)) {
            return response()->json(['message'=>'data tidak ditemukan'], 404);
        }
        $artikel->delete();
        return response()->json(['message'=>'data telah dihapus']);
    }
}
