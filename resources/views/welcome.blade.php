@extends('utama.app')
@section('title','Laravel')
@section('content')

<section class="section section-feature-grey is-medium">
            <div class="container">
                <div class="title-wrapper has-text-centered">
                    <h2 class="title is-2">Pilih Jenis Pelayanan</h2>
                    <h3 class="subtitle is-5 is-muted">Pemerintah kota Banda Aceh</h3>
                    <div class="divider is-centered"></div>
                </div>
        
                <div class="content-wrapper">
                    <div class="columns">
                        <div class="column is-one-third">
                            <div class="feature-card is-bordered has-text-centered is-feature-reveal">
                                <div class="card-title">
                                    <h4>Surat Keterangan Kurang Mampu</h4>
                                </div>
                                <div class="card-icon">
                                    <img src="{{url('assets/img/illustrations/pricing/3.svg')}}">
                                </div>
                                <div class="card-text">
                                    <p>Surat yang digunakan untuk keperluan pengajuan beasiswa..</p>
                                </div>
                                <div class="card-action">
                                    <a href="{{ url('/home') }}" class="button btn-align-md primary-btn raised">Get Started</a>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="feature-card is-bordered has-text-centered is-feature-reveal">
                                <div class="card-title">
                                    <h4>Surat Keterangan Domisili</h4>
                                </div>
                                <div class="card-icon">
                                    <img src="{{url('assets/img/illustrations/pricing/3.svg')}}">
                                </div>
                                <div class="card-text">
                                    <p>Surat pernyataan resmi sebagai keterangan tempat tinggal..</p>
                                </div>
                                <div class="card-action">
                                    <a href="{{ url('/home') }}" class="button btn-align-md primary-btn raised">Get Started</a>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="feature-card is-bordered has-text-centered is-feature-reveal">
                                <div class="card-title">
                                    <h4>Surat Keterangan Usaha</h4>
                                </div>
                                <div class="card-icon">
                                    <img src="{{url('assets/img/illustrations/pricing/3.svg')}}">
                                </div>
                                <div class="card-text">
                                    <p>Surat yang menjadi bukti sekaligus legelitas dari keberadaan suatu usaha..</p>
                                </div>
                                <div class="card-action">
                                    <a href="{{ url('/home') }}" class="button btn-align-md primary-btn raised">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection

@push('page-scripts')

@endpush