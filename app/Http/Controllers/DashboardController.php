<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tiketing;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //count data
        $hardware = Tiketing::where('category_id', '2')->count();
        $software = Tiketing::where('category_id', '1')->count();
        $network = Tiketing::where('category_id', '3')->count();
        $lain_lain = Tiketing::where('category_id', '4')->count();
        $total = Tiketing::count();
        $pending = Tiketing::where('status', 'pending')->count();
        $selesai = Tiketing::where('status', 'selesai')->count();
        $user = DB::table('tiketing')
            ->select(DB::raw('count(distinct nik) as total'))
            ->get();
        $totalUser = $user[0]->total;
        $data = DB::table('tiketing')
            ->select(DB::raw('DATE(created_at) as tanggal'), DB::raw('count(*) as total'))
            ->groupBy('tanggal')
            ->get();

        return view('admin.dashboard', [
            'pending' => $pending, 'selesai' => $selesai, 'total' => $total, 'totalUser' => $totalUser, 'hardware' => $hardware,
            'software' => $software, 'network' =>  $network, 'lain_lain' => $lain_lain, 'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function read()
    {
        $data = Tiketing::with('category')->get();

        return view('admin.tiketing')->with(['data' => $data]);
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
