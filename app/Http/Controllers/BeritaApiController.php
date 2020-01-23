<?php

namespace App\Http\Controllers;

use \App\Berita;
use Illuminate\Http\Request;

class BeritaApiController extends Controller
{
    /** 
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */ 
    public function index()
    {
        $beritas=Berita::all();
        return $beritas->toJson();
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
        $berita=Berita::create($input);
        return $berita;
    }

    /**
     * Display the spwcified resource.
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $berita=Berita::find($id);
        return $berita;
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
        $berita=Berita::find($id);
        if(empty($berita)){
            return response()->json(['message'=>'data tidak ditemukan'],404);
        }
        $berita->update($input);
        return response()->json($berita);
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita=Berita::find($id);
        if(empty($berita)) {
            return response()->json(['message'=>'data tidak ditemukan'], 404);
        }
        $berita->delete();
        return response()->json(['message'=>'data telah dihapus']);
    }
}
