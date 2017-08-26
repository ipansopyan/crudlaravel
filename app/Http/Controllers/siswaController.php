<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\siswa;

class siswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data['siswa'] = siswa::all();
        return view('siswa',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data = $request->all();
      $this->validate($request, [
       'nama_lengkap' => 'required',
       'kelas'        => 'required',
       'usia'         => 'required',
       'alamat'       => 'required'
   ]);
    $data = array(
      'nama_lengkap' => $request->nama_lengkap,
      'kelas'        => $request->kelas,
      'usia'         => $request->usia,
      'alamat'       => $request->alamat);
    siswa::create($data);
    return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $data['siswa'] = siswa::find($id);
      return view('edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
      $siswa = siswa::find($id);
      $siswa->nama_lengkap  = $request->nama_lengkap;
      $siswa->kelas         = $request->kelas;
      $siswa->usia          = $request->usia;
      $siswa->alamat        = $request->alamat;
      $siswa->save();
      return redirect('/');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = siswa::find($id);
        $siswa->delete();
        return redirect('/');
    }
}
