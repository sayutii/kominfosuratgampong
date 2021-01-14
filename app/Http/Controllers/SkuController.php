<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SkuController extends Controller
{
    //tampil data
    public function index() {
        $skm = DB::table('skm')->paginate(3);

        return view('suratmiskin.sku', ['skm' => $skm]);
    }

    //untuk menampilkan form tambah data
    public function tambah() {
        return view('suratmiskin.sku_Buatdata');
    }

    //method untuk simpan data 
    public function simpan(Request $request) {

        $this->_validation($request);
        
        //DB::insert('insert into skm (nama, tempatlahir, tanggallahir, jeniskelamin, alamat) value (?, ?, ?, ?, ?)', [$request->nama, $request->tempatlahir, $request->tanggallahir, $request->jeniskelamin, $request->alamat]);
        DB::table('skm')->insert(
            ['nama' => $request->nama, 'tempatlahir' => $request->tempatlahir, 'tanggallahir' => $request->tanggallahir, 'jeniskelamin' => $request->jeniskelamin, 'alamat' => $request->alamat],
        );
        return redirect()->route('sku')->with('message','Data berhasi disimpan.');
    }

    private function _validation(Request $request) {
        $validation = $request->validate([
            'nama' => 'required|max:200',
            'tempatlahir' => 'required|max:200',
            'tanggallahir' => 'required|max:10',
            'jeniskelamin' => 'required|max:10',
            'alamat' => 'required|max:200',
        ],
        [
            'nama.required' => 'Harus diisi',
            'tempatlahir.required' => 'Data tidak boleh kosong',
            'tanggallahir.required' => 'Harus diisi',
            'jeniskelamin.required' => 'Data tidak boleh kosong',
            'alamat.required' => 'Data tidak boleh kosong',
        ]);
    }

    //edit
    public function edit($id) {
        $skm = DB::table('skm')->where('id', $id)->first();

        return view('suratmiskin.sku_editdata', ['skm' => $skm]);
    }

    //hapus
    public function delete($id) {

        DB::table('skm')->where('id', $id)->delete();

        return redirect()->back()->with('message','Data berhasil dihapus.');
    }

    public function update(Request $request,$id) {
        $this->_validation($request);
        DB::table('skm')->where('id', $id)->update([
            'nama' => $request->nama,
            'tempatlahir' => $request->tempatlahir,
            'tanggallahir' => $request->tanggallahir,
            'jeniskelamin' => $request->jeniskelamin,
            'alamat' => $request->alamat,
        ]);
        
        return redirect()->route('sku')->with('message','Data berhasil diubah.');
    }

    public function lihat($id) {
        
        //return view('lihatsurat_sku');

        $skm = DB::table('skm')->where('id', $id)->paginate(1);
        
        return view('suratmiskin.lihatsurat_sku', ['skm' => $skm]);

       
    }
}
