@extends('layouts.master')
@section('title','Laravel')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
        <a href="{{ route('sdomisili.tambah') }}" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i>Buat Surat</a>
        <hr>
        @if (session('message'))
        <div class="alert alert-success alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">
                    <span>&times;</span>
                </button>
                {{ session('message')}}
            </div>
        </div>
        @endif
        <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Status</th>
                <th>Pekerjaan</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
            @foreach ($sdomisili as $no => $data)
            <tbody>
                <tr>
                    <th scope="row">{{ $sdomisili->firstItem()+$no }}</th>
                    <th>{{ $data->nama }}</th>
                    <th>{{ $data->tempatlahir }}</th>
                    <th>{{ $data->tanggallahir }}</th>
                    <th>{{ $data->jeniskelamin }}</th>
                    <th>{{ $data->status }}</th>
                    <th>{{ $data->pekerjaan }}</th>
                    <th>{{ $data->alamat }}</th>
                <td>
                    <a href="{{ route('sdomisili.edit', $data->id) }}" class="btn btn-sm btn-success">Edit</a>
                    <a href="{{ route('sdomisili.lihat', $data->id) }}" class="btn btn-sm btn-info">Lihat</a>
                    <a href="#" data-id="{{ $data->id }}" class="btn btn-sm btn-danger swal-confirm">
                    <form action="{{ route('sdomisili.delete',$data->id) }}" id="delete{{ $data->id }}" method="POST">
                    @csrf
                    @method('delete')
                    </form>
                    Hapus
                    </a>
                </td>
                </tr>
            </tbody>
            @endforeach
        </table>
        {{ $sdomisili->links() }}
        </div>
    </div>
</div>

@endsection

@push('page-scripts')

<script src="{{ asset('dashboard/assets/modules/sweetalert/sweetalert.min.js') }}"></script>

@endpush

@push('after-script')
<script>
$(".swal-confirm").click(function(e) {
    id = e.target.dataset.id;
  swal({
      title: 'Hapus Data Ini?',
      text: 'Anda tidak akan dapat melihat data ini lagi.',
      icon: 'warning',
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
      swal('Data Anda telah di hapus!', {
        icon: 'success',
      });
      $(`#delete${id}`).submit(); 
      } else {
      swal('Data anda aman');
      }
    });
});
</script>
@endpush