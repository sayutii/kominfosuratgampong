@extends('layouts.master')
@section('title','Laravel')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
                  <div class="card-header">
                    <h4>Surat Keterangan Domisili</h4>
                  </div>
                  <div class="card-body">
                  <form action="{{ route('sdomisili.simpan') }}" method="POST">
                  @csrf
                    <div class="form-group">
                      <label @error('nama')
                          class="text-danger" 
                      @enderror>Nama @error('nama')
                      | {{ $message }} @enderror</label>
                      <input type="text" name="nama" value="{{ old('nama') }}" class="form-control">
                    </div>
                    <div class="form-group">
                    <label @error('tempatlahir')
                          class="text-danger" 
                      @enderror>Tempat Lahir @error('tempatlahir')
                      | {{ $message }} @enderror</label>
                      <input type="text" name="tempatlahir" value="{{ old('tempatlahir') }}" class="form-control">
                    </div>
                    <div class="form-group">
                    <label @error('tanggallahir')
                          class="text-danger" 
                      @enderror>Tanggal Lahir @error('tanggallahir')
                      | {{ $message }} @enderror</label>
                      <input type="date" name="tanggallahir" value="{{ old('tanggallahir') }}" class="form-control">
                    </div>
                    <div class="form-group">
                      <label @error('jeniskelamin')
                          class="text-danger" 
                      @enderror>Jenis Kelamin @error('jeniskelamin')
                      | {{ $message }} @enderror</label>
                      <select name="jeniskelamin" value="{{ old('jeniskelamin') }}" class="form-control">
                        <option></option>
                        <option>Laki-laki</option>
                        <option>Perempuan</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label @error('status')
                          class="text-danger" 
                      @enderror>Status @error('status')
                      | {{ $message }} @enderror</label>
                      <select name="status" value="{{ old('status') }}" class="form-control">
                        <option></option>
                        <option>Kawin</option>
                        <option>Belum Kawin</option>
                      </select>
                    </div>
                    <div class="form-group">
                    <label @error('pekerjaan')
                          class="text-danger" 
                      @enderror>Pekerjaan @error('pekerjaan')
                      | {{ $message }} @enderror</label>
                      <input type="text" name="pekerjaan" value="{{ old('pekerjaan') }}" class="form-control">
                    </div>
                    <div class="form-group">
                    <label @error('alamat')
                          class="text-danger" 
                      @enderror>Alamat @error('alamat')
                      | {{ $message }} @enderror</label>
                      <input type="text" name="alamat" value="{{ old('alamat') }}" class="form-control">
                    </div>
                    </div>
                  <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Simpan</button>
                  </div>
                  </form>
                </div>
        </div>
    </div>
</div>

@endsection

@push('page-scripts')

@endpush