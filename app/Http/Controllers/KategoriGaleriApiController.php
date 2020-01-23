<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriGaleriApiController extends Controller
{
     /** 
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */ 
    public function index()
    {
        $kategorigaleris=KategoriGaleri::all();
        return $kategorigaleris->toJson();
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
        $kategorigaleri=KategoriGaleri::create($input);
        return $kategorigaleri;
    }

    /**
     * Display the spwcified resource.
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategorigaleri=KategoriGaleri::find($id);
        return $kategorigaleri;
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
        $kategorigaleri=KategoriGaleri::find($id);
        if(empty($kategorigaleri)){
            return response()->json(['message'=>'data tidak ditemukan'],404);
        }
        $kategorigaleri->update($input);
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategorigaleri=KategoriGaleri::find($id);
        if(empty($kategorigaleri)) {
            return response()->json(['message'=>'data tidak ditemukan'], 404);
        }
        $kategorigaleri->delete();
        return response()->json(['message'=>'data telah dihapus']);
    }
}
