<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class HomeController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index()
    {
        $warga = DB::table('warga')->get();
        return view('home',['warga' => $warga]);
    }

    public function tambahData()
    {
        return view('form_warga');
    }

    public function simpan(Request $request)
    {
        DB::table('warga')->insert([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'foto' => $request->foto
        ]);
        return redirect('/home');
    }

    public function edit($id)
    {
        $warga = DB::table('warga')->where('id', $id)->get();
        return view('edit', ['warga' => $warga]);
    }

    public function update(Request $request)
    {
        DB::table('warga')->where('id', $request->id)->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'foto' => $request->foto
        ]);
        return redirect('/home');
    }
}