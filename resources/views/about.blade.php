@extends('layouts.app')

@section('content')
  <!-- about breadcrumb -->
  <section class="w3l-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
      <div class="container pt-lg-5 pt-3 p-lg-4 pb-3">
        <h2 class="title mt-5 pt-lg-5 pt-sm-3">Tentang Kami</h2>
        <ul class="breadcrumbs-custom-path pb-sm-5 pb-4 mt-2 text-center mb-5">
          <li><a href="/">Home</a></li>
          <li class="active"> / Tentang Kami </li>
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
  <section id="about" class="home-services pt-lg-0">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="box-wrap">
            <div class="box-wrap-grid">
              <div class="icon">
                <span class="fa fa-music"></span>
              </div>
              <div class="info">
                <h4><a href="#url">Misi</a></h4>
                <p>Masak Musik Studio</p>
              </div>
            </div>
            <p class="mt-4">Mengedukasi dan mengembangkan potensi murid agar dapat menjadi yang terbaik pada
              bidang alat musik yang ditekuni.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mt-md-0 mt-4">
          <div class="box-wrap">
            <div class="box-wrap-grid">
              <div class="icon">
                <span class="fa fa-user"></span>
              </div>
              <div class="info">
                <h4><a href="#url">Visi</a></h4>
                <p>Masak Musik Studio</p>
              </div>
            </div>
            <p class="mt-4">Menjadi tempat edukasi terbaik di Indonesia untuk bidang music course dengan kurikulum
              yang terbaharui.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mt-lg-0 mt-4">
          <div class="box-wrap">
            <div class="box-wrap-grid">
              <div class="icon">
                <span class="fa fa-trophy"></span>
              </div>
              <div class="info">
                <h4><a href="#url">Tujuan</a></h4>
                <p>Masak Musik Studio</p>
              </div>
            </div>
            <p class="mt-4">Menghasilkan murid yang bisa memaksimalkan potensi bermusiknya dengan menggunakan alat-alat
              yang ada di show stage.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="w3l-aboutblock1 py-5" id="about">
    <div class="container py-lg-5 py-md-4 py-2">
      <div class="row">
        <div class="col-lg-6 align-self">
          <span class="title-small mb-2">Tentang Kami</span>
          <h3 class="title-big mx-0">Selamat Datang di Masak Musik Studio - Les dan Studio Musik</h3>
          <p class="mt-lg-4 mt-3">Masak Musik Studio berdiri sejak 2016 di Pati – Jawa Tengah. Seperti halnya memasak,
            musik yang kami kerjakan mulai dari menyiapkan materi/bahan, mengolah bahan mentah menjadi matang,
            menghiasnya sehingga layak untuk disajikan.
          </p>
          <p class="mt-3 mb-lg-5">Layanan yang kami tawarkan mulai dari rental studio musik,
            rekaman, aransemen, komposisi, song writing, minus one, mixing, mastering, sound design, scoring, music
            production course, hingga pembuatan video klip.</p>
        </div>
        <div class="col-lg-6 left-wthree-img mt-lg-0 mt-sm-5 mt-4">
          <img src="assets/images/c1.png" alt="" class="img-fluid radius-image">
        </div>
      </div>
    </div>
  </section>
  <section class="w3l-servicesblock w3l-servicesblock1 py-5" id="progress">
    <div class="container py-lg-5 py-md-4 py-2">
      <div class="row">
        <div class="col-lg-6 align-self pr-lg-4">
          <div class="progress-info info1">
            <h6 class="progress-tittle">Skill <span class="">80%</span></h6>
            <div class="progress">
              <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 80%" aria-valuenow="90"
                aria-valuemin="0" aria-valuemax="100">
              </div>
            </div>
          </div>
          <div class="progress-info info2">
            <h6 class="progress-tittle">Feeling <span class="">95%</span>
            </h6>
            <div class="progress">
              <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 95%" aria-valuenow="95"
                aria-valuemin="0" aria-valuemax="100">
              </div>
            </div>
          </div>
          <div class="progress-info info3">
            <h6 class="progress-tittle">Audio Recognizing <span class="">90%</span></h6>
            <div class="progress">
              <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 90%" aria-valuenow="95"
                aria-valuemin="0" aria-valuemax="100">
              </div>
            </div>
          </div>
          <div class="progress-info info4">
            <h6 class="progress-tittle">Emotion Control <span class="">75%</span></h6>
            <div class="progress">
              <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 75%" aria-valuenow="95"
                aria-valuemin="0" aria-valuemax="100">
              </div>
            </div>
          </div>
          <div class="progress-info info2 mb-0">
            <h6 class="progress-tittle">Attitude <span class="">95%</span></h6>
            <div class="progress">
              <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 95%" aria-valuenow="95"
                aria-valuemin="0" aria-valuemax="100">
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mt-lg-0 mt-5 pl-lg-4">
          <span class="title-small mb-2">Progress bars</span>
          <h3 class="title-big"> Apa yang anda dapat dari Masak Musik Studio?</h3>
          <p class="mt-md-4 mt-3">Di tempat kursus kami tidak hanya melatih skill bermusik saja, tapi kami
            memperhatikan dengan baik dari segi yang lebih kompleks. Kami mengajarkan murid kami bagaimana
            cara mendapatkan feeling, bagaimana cara kita bisa menyatu dengan lagu menggunakan audio recognizing,
            cara kontrol emosi ketika bermusik, dan menjaga attitude ketika akan tampil.</p>
          <a href="#url" class="btn btn-primary btn-style mt-md-5 mt-4">Bergabung</a>
        </div>
      </div>
    </div>
  </section>
  <section class="w3l-block py-5" id="">
    <div class="container py-lg-5 py-md-3">
      <div class="row">
        <div class="col-lg-6 about-right-faq align-self">
          <span class="title-small mb-2">Mulai kursus musik</span>
          <h3 class="title-big mx-0"> Tingkatkan keterampilan Anda dengan kursus musik terbaik</h3>
          <p class="mt-lg-4 mt-3 mb-lg-5 mb-4">Mentor kursus kami sudah memperoleh sertifikasi instruktur musik nasional dan
            materi yang kami berikan sudah sesuai dengan kurikulum terbaru. Kami membekali murid agar bisa belajar musik tidak hanya
            ditempat les namun bisa juga dilakukan secara mandiri di rumah.
          </p>
          <div class="two-grids mt-md-0 mt-md-5 mt-4">
            <div class="grids_info">
              <h4>Sertifikasi Nasional</h4>
              <p class="">Mentor mendapatkan sertifikasi instruktur musik nasional.</p>
            </div>
            <div class="grids_info">
              <h4>Kurikulum Terbaru</h4>
              <p class="">Murid mendapatkan materi dengan kurikulum musik terbaru.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-6 left-wthree-img mt-lg-0 mt-sm-5 mt-4">
          <img src="assets/images/alan.png" alt="" class="img-fluid radius-image">
        </div>
        <div class="col-lg-3 col-6  left-wthree-img mt-lg-0 mt-sm-5 mt-4">
          <img src="assets/images/masmuss.png" alt="" class="img-fluid radius-image">
        </div>
      </div>
    </div>
  </section>
  <!-- stats -->
  <section class="w3l-stats py-5" id="stats">
    <div class="gallery-inner container py-lg-5 py-md-4">
      <span class="title-small text-center mb-1">Pencapaian Kami</span>
      <h3 class="title-big text-center mb-5">Kemajuan Kami Tidak Akan Terhenti</h3>
      <div class="row stats-con">
        <div class="col-md-3 col-6 stats_info counter_grid">
          <p class="counter">107 </p>
          <span class="plus">+</span><br>
          <h3>Murid Terdaftar</h3>
        </div>
        <div class="col-md-3 col-6 stats_info counter_grid1">
          <p class="counter">86</p>
          <span class="plus">+</span><br>
          <h3>Aransemen Dikerjakan</h3>
        </div>
        <div class="col-md-3 col-6 stats_info counter_grid mt-md-0 mt-4">
          <p class="counter">254</p>
          <span class="plus">+</span><br>
          <h3>Pelanggan Studio</h3>
        </div>
        <div class="col-md-3 col-6 stats_info counter_grid2 mt-md-0 mt-4">
          <p class="counter">4 </p>
          <span class="plus">+</span><br>
          <h3>Mentor Pribadi</h3>
        </div>
      </div>
    </div>
  </section>
  <!-- //stats -->

@endsection