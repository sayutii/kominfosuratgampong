<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DomisiliController extends Controller
{
    //tampil data
    public function index() {
        $sdomisili = DB::table('sdomisili')->paginate(3);

        return view('suratdomisili.sdomisili', ['sdomisili' => $sdomisili]);
    }

    //untuk menampilkan form tambah data
    public function tambah() {
        return view('suratdomisili.sdomisili_Buatdata');
    }

    //method untuk simpan data 
    public function simpan(Request $request) {

        $this->_validation($request);
        
        //DB::insert('insert into skm (nama, tempatlahir, tanggallahir, jeniskelamin, alamat) value (?, ?, ?, ?, ?)', [$request->nama, $request->tempatlahir, $request->tanggallahir, $request->jeniskelamin, $request->alamat]);
        DB::table('sdomisili')->insert(
            ['nama' => $request->nama, 'tempatlahir' => $request->tempatlahir, 'tanggallahir' => $request->tanggallahir, 'jeniskelamin' => $request->jeniskelamin, 'status' => $request->status, 'pekerjaan' => $request->pekerjaan, 'alamat' => $request->alamat],
        );
        return redirect()->route('sdomisili')->with('message','Data berhasi disimpan.');
    }

    private function _validation(Request $request) {
        $validation = $request->validate([
            'nama' => 'required|max:200',
            'tempatlahir' => 'required|max:200',
            'tanggallahir' => 'required|max:10',
            'jeniskelamin' => 'required|max:10',
            'status' => 'required|max:50',
            'pekerjaan' => 'required|max:100',
            'alamat' => 'required|max:200',
        ],
        [
            'nama.required' => 'Harus diisi',
            'tempatlahir.required' => 'Data tidak boleh kosong',
            'tanggallahir.required' => 'Harus diisi',
            'jeniskelamin.required' => 'Data tidak boleh kosong',
            'status.required' => 'Data tidak boleh kosong',
            'pekerjaan.required' => 'Data tidak boleh kosong',
            'alamat.required' => 'Data tidak boleh kosong',
        ]);
    }

    //edit
    public function edit($id) {
        $sdomisili = DB::table('sdomisili')->where('id', $id)->first();

        return view('suratdomisili.sdomisili_editdata', ['sdomisili' => $sdomisili]);
    }

    //hapus
    public function delete($id) {

        DB::table('sdomisili')->where('id', $id)->delete();

        return redirect()->back()->with('message','Data berhasil dihapus.');
    }

    public function update(Request $request,$id) {
        $this->_validation($request);
        DB::table('sdomisili')->where('id', $id)->update([
            'nama' => $request->nama,
            'tempatlahir' => $request->tempatlahir,
            'tanggallahir' => $request->tanggallahir,
            'jeniskelamin' => $request->jeniskelamin,
            'status' => $request->status,
            'pekerjaan' => $request->pekerjaan,
            'alamat' => $request->alamat,
        ]);
        
        return redirect()->route('sdomisili')->with('message','Data berhasil diubah.');
    }

    public function lihat($id) {
        
        $sdomisili = DB::table('sdomisili')->where('id', $id)->paginate(1);
        
        return view('suratdomisili.lihatsurat_domisili', ['sdomisili' => $sdomisili]);

       
    }
}
