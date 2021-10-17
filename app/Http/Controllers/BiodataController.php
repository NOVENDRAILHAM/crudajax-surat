<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;
use \PDF;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function read()
    {
        $data = Biodata::all();
        return view('read')->with([
            'data' => $data
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $biodata = Biodata::create([
            'id' => $request->id,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'jabatan' => $request->jabatan,
            'namaPerusahaan' => $request->namaPerusahaan,
        ]);

        
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
        $data = Biodata::findOrFail($id);
        return view('edit')->with([
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Biodata::whereId($request->id)
        ->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'jabatan' => $request->jabatan,
            'namaPerusahaan' => $request->namaPerusahaan,
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $data = Biodata::findOrFail($id);
        $data->delete();
        return back()->with('success','Item created successfully!');
       
    }
    public function suratijin($id)
    {
        $data = Biodata::findOrFail($id);
        // $pdf = PDF::loadView('suratijin', ['data' => $data]);
        // return $pdf->download('user.pdf');
        // return view('suratijin')->with([
        //     'data' => $data
        // ]);
        $pdf = PDF::loadview('suratijin', compact('data'))->setPaper('A4');
        return $pdf->download('Surat Ijin.pdf');
    }
    public function suratlamar($id)
    {
        $data = Biodata::findOrFail($id);
        // $pdf = PDF::loadView('suratijin', ['data' => $data]);
        // return $pdf->download('user.pdf');
        // return view('suratijin')->with([
        //     'data' => $data
        // ]);
        $pdf = PDF::loadview('suratlamar', compact('data'))->setPaper('A4');
        return $pdf->download('Surat lamar.pdf');
    }
}
