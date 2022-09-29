@extends('layouts.app')

@section('content')
  <!-- about breadcrumb -->
  <section class="w3l-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
      <div class="container pt-lg-5 pt-3 p-lg-4 pb-3">
        <h2 class="title mt-5 pt-lg-5 pt-sm-3">Hubungi Kami</h2>
        <ul class="breadcrumbs-custom-path pb-sm-5 pb-4 mt-2 text-center mb-md-5">
          <li><a href="/">Home</a></li>
          <li class="active"> / Kontak </li>
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
  <!-- //about breadcrumb -->
  <!-- contact block -->
  <!-- contact1 -->
  <section class="w3l-contact-1 pb-5" id="contact">
    <div class="contacts-9 py-lg-5 py-md-4">
      <div class="container">
        <div class="d-grid contact-view">
          <div class="cont-details">
            <h4 class="title-small">Hubungi Kami</h4>
            <h3 class="title-big mb-4">Kapanpun anda mau menghubungi kami</h3>
            <p class="mb-sm-5 mb-4">Mulai pesan aransemen di kami, 3 hari langsung jadi.</p>

            <div class="cont-top">
              <div class="cont-left text-center">
                <span class="fa fa-map-marker text-primary"></span>
              </div>
              <div class="cont-right">
                <h6>Alamat</h6>
                <p class="pr-lg-5">Gg. Jeruk No.67a, Plangitan, Kec. Pati, Kabupaten Pati, Jawa Tengah 59113.</p>
              </div>
            </div>
            <div class="cont-top margin-up">
              <div class="cont-left text-center">
                <span class="fa fa-phone text-primary"></span>
              </div>
              <div class="cont-right">
                <h6>Telepon </h6>
                <p><a href="tel:+(62) 85642011047">0856-4201-1047</a></p>
              </div>
            </div>
            <div class="cont-top margin-up">
              <div class="cont-left text-center">
                <span class="fa fa-envelope-o text-primary"></span>
              </div>
              <div class="cont-right">
                <h6>Email</h6>
                <p><a href="mailto:masakmusikstudio@gmail.com" class="mail">masakmusikstudio@gmail.com</a></p>
              </div>
            </div>
          </div>
          <div class="map-content-9">
            <h5 class="mb-sm-4 mb-3">Sampaikan ke kami</h5>
            <form action="https://sendmail.w3layouts.com/submitForm" method="post">
              <div class="twice-two">
                <input type="text" class="form-control" name="w3lName" id="w3lName" placeholder="Nama" required="">
                <input type="email" class="form-control" name="w3lSender" id="w3lSender" placeholder="Email"
                  required="">
              </div>
              <div class="twice">
                <input type="text" class="form-control" name="w3lSubject" id="w3lSubject" placeholder="Subjek"
                  required="">
              </div>
              <textarea name="w3lMessage" class="form-control" id="w3lMessage" placeholder="Pesan"
                required=""></textarea>
              <div class="text-right">
                <button type="submit" class="btn btn-primary btn-style mt-4">Kirim</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /contact1 -->
  <div class="map-iframe">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.129117796283!2d111.02862851449831!3d-6.75410456792133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70d24f09456d21%3A0x31192b17fd1f2b99!2sMasak%20Musik%20Studio!5e0!3m2!1sen!2sid!4v1650895738525!5m2!1sen!2sid"
      width="100%" height="400" frameborder="0" style="border: 0px;" allowfullscreen=""></iframe>
  </div>
  <!-- //contact block -->

@endsection