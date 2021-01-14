@extends('layouts.master')
@section('title','Laravel')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
                  <div class="card-header">
                    <h4>Surat Keterangan Kurang Mampu</h4>
                  </div>
                  <div class="card-body">
                  <form action="{{ route('sku.update', $skm->id) }}" method="POST">
                  @csrf
                  @method('patch')
                    <div class="form-group">
                      <label @error('nama')
                          class="text-danger" 
                      @enderror>Nama @error('nama')
                      | {{ $message }} @enderror</label>
                      <input type="text" name="nama" 
                      
                      @if (old('nama'))
                            value="{{ old('nama') }}"
                      @else
                            value="{{ $skm->nama }}" 
                      @endif  

                        class="form-control">
                    </div>
                    <div class="form-group">
                    <label @error('tempatlahir')
                          class="text-danger" 
                      @enderror>Tempat Lahir @error('tempatlahir')
                      | {{ $message }} @enderror</label>
                      <input type="text" name="tempatlahir" 
                      
                      @if (old('tempatlahir'))
                            value="{{ old('tempatlahir') }}"
                      @else
                            value="{{ $skm->tempatlahir }}" 
                      @endif  

                        class="form-control">
                    </div>
                    <div class="form-group">
                    <label @error('tanggallahir')
                          class="text-danger" 
                      @enderror>Tanggal Lahir @error('tanggallahir')
                      | {{ $message }} @enderror</label>
                      <input type="date" name="tanggallahir" 
                      
                      @if (old('tanggallahir'))
                            value="{{ old('tanggallahir') }}"
                      @else
                            value="{{ $skm->tanggallahir }}" 
                      @endif  

                        class="form-control">
                    </div>
                    <div class="form-group">
                      <label @error('jeniskelamin')
                          class="text-danger" 
                      @enderror>Jenis Kelamin @error('jeniskelamin')
                      | {{ $message }} @enderror</label>
                      <select name="jeniskelamin" 
                      
                      @if (old('jeniskelamin'))
                            value="{{ old('jeniskelamin') }}"
                      @else
                            value="{{ $skm->jeniskelamin }}" 
                      @endif  

                        class="form-control">
                        <option></option>
                        <option>Laki-laki</option>
                        <option>Perempuan</option>
                      </select>
                    </div>
                    <div class="form-group">
                    <label @error('alamat')
                          class="text-danger" 
                      @enderror>Alamat @error('alamat')
                      | {{ $message }} @enderror</label>
                      <input type="text" name="alamat" 
                      
                      @if (old('alamat'))
                            value="{{ old('alamat') }}"
                      @else
                            value="{{ $skm->alamat }}" 
                      @endif  

                        class="form-control">
                    </div>
                    </div>
                  <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Ubah</button>
                  </div>
                  </form>
                </div>
        </div>
    </div>
</div>

@endsection

@push('page-scripts')

@endpush