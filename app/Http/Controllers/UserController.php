<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function index() {
        // $data['users'] = DB::table('users')->select('*')->get();
        return view('index');
    }

    public function tambahView() {
        return view('tambah');
    }

    public function tambah(Request $request) {
        DB::table('users')->insert([
            'username' => $request->username,
            'email' => $request->email,
            'nomor_hp' => $request->nomor_hp
        ]);
        return redirect('/')->with('message', 'User Berhasil Ditambahkan');
    }

    public function editView($id){
        $data['user'] = DB::table('users')->where('id', $id)->first();
        return view('edit', $data);
    }

    public function edit(Request $request, $id) {
        DB::table('users')
            ->where('id', $id)
            ->update([
            'username' => $request->username,
            'email' => $request->email,
            'nomor_hp' => $request->nomor_hp
        ]);
        return redirect('/')->with('message', 'User Berhasil Diubah');
    }

    public function delete($id) {
        DB::table('users')->where('id', $id)->delete();
        return redirect('/')->with('message', 'User Berhasil Dihapus');
    }
}
