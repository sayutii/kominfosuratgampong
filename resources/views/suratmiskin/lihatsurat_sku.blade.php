@extends('layouts.master')
@section('title','Laravel')
@section('content')
<div class="section-body">
<head>
    <title>Contoh Surat</title>
</head>

<table align="center">
    <tr>
    <td><img src ="{{url('dashboard/assets/img/diskominfo.png')}}" width="105" height="110"></td>
    <td><center>
        <font size="4">KOTA BANDA ACEH</font><BR>
        <font size="5">DINAS KOMUNIKASI, INFORMATIKA DAN STATISTIK</font><BR>
        <font size="2"><i>Jl. Teuku Nyak Arif No.130, Lamgugob, Kec. Syiah Kuala, Kota Banda Aceh, Aceh 23115<i></font></center>
    </td>
    <td><img src ="{{url('dashboard/assets/img/banda aceh.png')}}" width="75" height="100"></td>
    </tr>
    <tr>
        <td colspan="2"><hr> </td>
    </tr>
</table>

<table align="center">
<tr>
    <td><center>
        <font size="4">SURAT KETERANGAN TIDAK MAMPU/MISKIN</font></center><BR>
    </td>
    </tr>
    <tr>
        <td colspan="2" align="justify">Yang bertanda dibawah ini Kepala Desa Punge Jurong menerangkan bahwa :</td>
    </tr>  
    <tr>
        <td height="30" colspan="2"></td>
    </tr>
</table>

<table align="center">

@foreach ($skm as $data)
    <tr>
        <td>Nama</td>
        <td width="500"> : {{ $data->nama }}</td>
    </tr>
    <tr>
        <td>Tempat Lahir</td>
        <td width="500"> : {{ $data->tempatlahir }}</td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td>
        <td width="500"> : {{ $data->tanggallahir }}</td>
    </tr>
    <tr>
        <td>jenis kelamin</td>
        <td width="500"> : {{ $data->jeniskelamin }}</td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td width="500"> : {{ $data->alamat }}</td>
    </tr>
    <tr>
        <td height="50" colspan="2"></td>
    </tr>
    <tr>
        <td colspan="2" align="justify">Yang bersangkutan adalah benar-benar warga Desa Punge 
         Jurong berasal dari keluarga <br> kurang mampu.<br>
         Demikian surat keterangan ini dibuat untuk dapat dipergunakan sebagaimana mestinya. 
         </td>
    </tr>  
    @endforeach
</table>
<br>

<table align="center">
    <tr>
        <td><center>Kepala Desa Punge Jurong</center></td>
    </tr>
    <tr>
        <td height="70" colspan="2"></td>
    </tr>
    <tr>
        <td><center> <u> Ir. Muhammad Sayuti</u></center></td>
    </tr>
    <tr>
        <td>Nip. 192 168169199 001 1</td>
    </tr>

</table>
<body>
</div>

@endsection

@push('page-scripts')



@endpush

@push('after-script')

@endpush