<?php

namespace App\Http\Controllers;

use App\pendidikan;
use Illuminate\Http\Request;

class PendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendidikan = Pendidikan::all();
        $response = [
            'success' => true,
            'data' => $pendidikan,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pendidikan = new Pendidikan();
        $pendidikan->nama = $request->nama;
        $pendidikan->wali_kelas = $request->wali_kelas;
        $pendidikan->jurusan = $request->jurusan;
        $pendidikan->kelas = $request->kelas;
        $pendidikan->mapel = $request->mapel;
        $pendidikan->save();
        $response = [
            'success' => true,
            'data' => $pendidikan,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pendidikan  $pendidikan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pendidikan = Pendidikan::findOrFail($id);
        $response = [
            'success' => true,
            'data' => $pendidikan,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pendidikan  $pendidikan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pendidikan  $pendidikan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pendidikan = pendidikan::findOrFail($id);
        $pendidikan->nama = $request->nama;
        $pendidikan->wali_kelas = $request->wali_kelas;
        $pendidikan->jurusan = $request->jurusan;
        $pendidikan->kelas = $request->kelas;
        $pendidikan->mapel = $request->mapel;
        $pendidikan->save();
        $response = [
            'success' => true,
            'data' => $pendidikan,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pendidikan  $pendidikan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pendidikan = pendidikan::findOrFail($id)->delete();
        $response = [
            'success' => true,
            'data' => $pendidikan,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
    }
}
