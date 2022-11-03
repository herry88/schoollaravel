<?php

namespace App\Http\Controllers;

use App\Models\JadwalKuliah;
use Illuminate\Http\Request;

class JadwalKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('jadwalkuliah.index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JadwalKuliah  $jadwalKuliah
     * @return \Illuminate\Http\Response
     */
    public function show(JadwalKuliah $jadwalKuliah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JadwalKuliah  $jadwalKuliah
     * @return \Illuminate\Http\Response
     */
    public function edit(JadwalKuliah $jadwalKuliah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JadwalKuliah  $jadwalKuliah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JadwalKuliah $jadwalKuliah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JadwalKuliah  $jadwalKuliah
     * @return \Illuminate\Http\Response
     */
    public function destroy(JadwalKuliah $jadwalKuliah)
    {
        //
    }
}
