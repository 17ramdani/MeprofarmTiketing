<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Illuminate\Console\View\Components\Alert;

class LoginController extends Controller
{
    //login
    public function index()
    {
        return view('user.login');
    }

    public function loginApi(Request $request)
    {
        $request->validate([
            'nik' => 'required'
        ]);

        try {
            $http = new \GuzzleHttp\Client;
            $nik = $request->nik;
            $response = $http->get('http://mepro.ddns.net:678/mepro-api/checknik?', [
                'headers' => [
                    'Authorization' => 'Bearer ' . session()->get('token.access_token')
                ],
                'query' => ['nik' => $nik]
            ]);

            $data = json_decode($response->getBody(), true);
            if (empty($data)) {
                toast('NIK yang anda masukan salah', 'error');
                return redirect()->back()->withErrors("Gagal Login, NIK tidak ditemukan")->withInput();
            }
            $request->session()->put('data', $data);
            $request->session()->put('nik', $data[0]['nik']);
            $request->session()->put('namaLengkap', $data[0]['namaLengkap']);
            $request->session()->put('namaDepartemen', $data[0]['namaDepartemen']);
            $request->session()->put('subdepName', $data[0]['subdepName']);

            if ($response->getStatusCode() == 200) {
                session()->put('api_data', $data);
                toast('Anda Berhasil Login', 'Success');
                return redirect()->to('/tiketing/create')->with('success', 'Anda Berhasil Login');
            } else {
                return redirect()->back()->withErrors("NIK Salah");
            }
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            toast('Anda harus masukan NIK', 'error');
            return redirect()->back()->withErrors("Terjadi kesalahan saat mengambil data. Silahkan coba lagi.");
        }
    }
}
