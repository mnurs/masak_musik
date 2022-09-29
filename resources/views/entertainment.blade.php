@extends('layouts.app')

@section('content')
  <!-- register festival breadcrumb -->
  <section class="w3l-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
      <div class="container pt-lg-5 pt-3 p-lg-4 pb-3">
        <h2 class="title mt-5 pt-lg-5 pt-sm-3">Masak Musik Entertainment</h2>
        <ul class="breadcrumbs-custom-path pb-sm-5 pb-4 mt-2 text-center mb-md-5">
          <li><a href="/">Home</a></li>
          <li class="active"> / Masak Musik Entertainment </li>
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
    <div class="row">
        <img class='img-fluid w-100' src="assets/images/brosur-masmus-belakang.png" alt="" />
    </div>
    <div class="container">
        <center><a class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2" href="/contact">Kontak</a></center>
    </div>
  <!-- //register festival breadcrumb -->
  <!-- register festival block -->
  <!-- register festival -->

  <section class="w3l-contact-1 pb-5" id="contact">
    
  </section>
  <!-- /register festival -->
  <!-- //register festival block -->
@endsection
