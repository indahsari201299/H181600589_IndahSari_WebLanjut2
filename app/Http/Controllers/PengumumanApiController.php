<?php

namespace App\Http\Controllers;

use \App\Pengumuman;
use Illuminate\Http\Request;

class PengumumanApiController extends Controller
{
    /** 
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */ 
    public function index()
    {
        $pengumumans=Pengumuman::all();
        return $pengumumans->toJson();
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
        $pengumuman=Pengumuman::create($input);
        return $pengumuman;
    }

    /**
     * Display the spwcified resource.
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengumuman=Pengumuman::find($id);
        return $pengumuman;
    }

    /**
     * update the specified resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input=$request->all();
        $pengumuman=Pengumuman::find($id);
        if(empty($pengumuman)){
            return response()->json(['message'=>'data tidak ditemukan'],404);
        }
        $pengumuman->update($input);
        return response()->json($pengumuman);
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengumuman=Pengumuman::find($id);
        if(empty($pengumuman)) {
            return response()->json(['message'=>'data tidak ditemukan'], 404);
        }
        $pengumuman->delete();
        return response()->json(['message'=>'data telah dihapus']);
    }
}
