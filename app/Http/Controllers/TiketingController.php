<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Tiketing;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;


class TiketingController extends Controller
{

    public function index()
    {
        return view('user.tiketing');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'dep' => 'required',
            'subDep' => 'required',
            'ext' => 'required',
            'category_id' => 'required',
            'catatan' => 'nullable',
        ]);

        $data = new Tiketing([
            'nik' => $request->get('nik'),
            'nama' => $request->get('nama'),
            'dep' => $request->get('dep'),
            'subDep' => $request->get('subDep'),
            'ext' => $request->get('ext'),
            'category_id' => $request->get('category_id'),
            'catatan' => $request->get('catatan'),
            'tgl_pengajuan' => date('Y-m-d H:i:s'),
            'status' => 'pending'
        ]);
        $data->save();

        // Auth::logout();
        toast('Data Berhasil Dikirim', 'Success');
        return redirect()->route('user.login')->with('success', 'Data berhasil disimpan.');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
