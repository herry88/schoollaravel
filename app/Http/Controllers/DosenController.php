<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dosen = Dosen::all(); //select * from dosen
        return view('dosen.index',compact('dosen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dosen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
        $this->validate($request, [
            'nidn'=>'required',
            'nama'=>'required',
            'nohp'=>'required',
            'email'=>'required'
        ]);
        //deklarasi variabel pada form
        //$nidn = $_POST['nidn']
        $dosen = new Dosen();
        $dosen->nidn = $request->input('nidn');
        $dosen->nama = $request->input('nama');
        $dosen->nohp = $request->input('nohp');
        $dosen->email = $request->input('email');
        //redirect
        if ($dosen->save()) {
           return redirect()->route('dosen.index')->with('status','Data Berhasil Di save');
        }else{
            return redirect()->back()->with('errors','Gagal Di Simpan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function show(Dosen $dosen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function edit($nidn)
    {
        $data['dosen'] = Dosen::where('nidn', $nidn)->first();
        return view('dosen.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nidn)
    {
        //validate
        $request->validate([
            'nama'=>'required|min:6',
            'email'=>'required',
            'nohp'=>'required'
        ]);
        $dosen = Dosen::where('nidn',$nidn)->first();
        $dosen->nidn = $request->input('nidn');
        $dosen->nama = $request->input('nama');
        $dosen->nohp = $request->input('nohp');
        $dosen->email = $request->input('email');

        //redirect
        if ($dosen->save()) {
            return redirect()->route('dosen.index')->with('status','Data Berhasil Di Update');
        }else{
            return redirect()->back()->with('errors','data Gagal di simpan');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function destroy($nidn)
    {
        //function deelte
        $dosen = Dosen::where('nidn',$nidn);
        $dosen->delete();
        return redirect()->back()->with('status','Data Berhasil Di hapus');
    }
}
