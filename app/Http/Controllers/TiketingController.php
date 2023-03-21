<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Tiketing;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Alert;


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

    public function detail($id)
    {
        $data = Tiketing::where('id', $id)->firstOrFail();
        return view('admin.detail', compact('data', 'id'));
    }

    public function update(Request $request, $id)
    {
        $data = Tiketing::findOrFail($id);

        $request->validate([
            'category_id' => 'required',
            'status' => 'required',
            'catatan' => 'required'
        ]);

        $data->category_id = $request->category_id;
        $data->status = $request->status;
        $data->catatan = $request->catatan;

        $data->save();
        toast('Data Berhasil Diupdate', 'Success');
        return redirect()->route('tiketing.read');
    }

    public function destroy($id)
    {
        $data = Tiketing::findOrFail($id);
        $data->delete();
        toast('Data Berhasil Hapus', 'Success');
        return redirect()->route('tiketing.read');
    }
}
