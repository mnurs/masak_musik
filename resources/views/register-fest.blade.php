@extends('layouts.app')

@section('content')
  <!-- register festival breadcrumb -->
  <section class="w3l-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
      <div class="container pt-lg-5 pt-3 p-lg-4 pb-3">
        <h2 class="title mt-5 pt-lg-5 pt-sm-3">Pendaftaran Festival Band Hari Jadi Pati 2022</h2>
        <ul class="breadcrumbs-custom-path pb-sm-5 pb-4 mt-2 text-center mb-md-5">
          <li><a href="/">Home</a></li>
          <li class="active"> / Daftar Festival </li>
        </ul>
      </div>
    </div>
    <div class="waveWrapper waveAnimation">
      <svg viewBox="0 0 500 150" preserveAspectRatio="none">
        <path d="M-5.07,73.52 C149.99,150.00 299.66,-102.13 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
          style="stroke: none;"></path>
      </svg>
    </div>
  </section>
  <!-- //register festival breadcrumb -->
  <!-- register festival block -->
  <!-- register festival -->

  <section class="w3l-contact-1 pb-5" id="contact">
    <div class="contacts-9 py-lg-5 py-md-4">
        <div class="container">
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
                <div class="map-content-9">
                    <h5 class="mb-sm-4 mb-3">Identitas Band</h5>
                        <form method="POST" action="/register-fest">
                            @csrf

                            <div class="twice-two">
                                <input id="pimpinan" type="text" class="form-control @error('pimpinan') is-invalid @enderror" name="pimpinan" value="{{ old('pimpinan') }}" required autocomplete="pimpinan" autofocus placeholder="Nama Pimpinan">

                                @error('pimpinan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input id="wa" type="tel" class="form-control @error('wa') is-invalid @enderror" name="wa" value="{{ old('wa') }}" required autocomplete="wa" autofocus placeholder="Nomor Telepon/WA">

                                @error('wa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="twice-two">
                                <input id="band" type="tel" class="form-control @error('band') is-invalid @enderror" name="band" value="{{ old('band') }}" required autocomplete="band" autofocus placeholder="Nama Band">

                                @error('band')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input id="jumlah" type="number" class="form-control @error('jumlah') is-invalid @enderror" name="jumlah" value="{{ old('jumlah') }}" required autocomplete="jumlah" autofocus placeholder="Jumlah Personil">

                                @error('jumlah')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                                
                            </div>

                            <div class="twice">
                                <textarea id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" required autocomplete="alamat" autofocus placeholder="Alamat">{{ old('alamat') }}</textarea>

                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <h5 class="mb-sm-4 mb-3">Nama Personil</h5>

                            <div class="twice-two">
                                <input id="vocal" type="text" class="form-control @error('vocal') is-invalid @enderror" name="vocal" value="{{ old('vocal') }}" required autocomplete="vocal" autofocus placeholder="Vocal">

                                @error('vocal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input id="drum" type="text" class="form-control @error('drum') is-invalid @enderror" name="drum" value="{{ old('drum') }}" required autocomplete="drum" autofocus placeholder="Drums">

                                @error('drum')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="twice-two">
                                <input id="guitar" type="text" class="form-control @error('guitar') is-invalid @enderror" name="guitar" value="{{ old('guitar') }}" required autocomplete="guitar" autofocus placeholder="Guitar">

                                @error('guitar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input id="bass" type="text" class="form-control @error('bass') is-invalid @enderror" name="bass" value="{{ old('bass') }}" required autocomplete="bass" autofocus placeholder="Bass">

                                @error('bass')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                                
                            </div>

                            <div class="twice-two">
                                <input id="keyboard" type="text" class="form-control @error('keyboard') is-invalid @enderror" name="keyboard" value="{{ old('keyboard') }}" required autocomplete="keyboard" autofocus placeholder="Keyboard">

                                @error('keyboard')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input id="other" type="text" class="form-control @error('other') is-invalid @enderror" name="other" value="{{ old('other') }}" required autocomplete="other" autofocus placeholder="Lainnya">

                                @error('other')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                                
                            </div>

                            <div class="text-left">Isi 'Tidak Ada' jika band tidak memiliki personil yang menggunakan alat musik tersebut.</div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary btn-style mt-4">Daftar</button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
  </section>
  <!-- /register festival -->
  <!-- //register festival block -->
@endsection
