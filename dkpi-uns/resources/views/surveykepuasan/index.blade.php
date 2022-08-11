<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>@yield('title')</title>
  <!-- Favicon -->
  <link href="{{asset('/images/fav.png')}}" rel="icon">
  <link href="{{asset('/images/uns-touch-icon.png')}}" rel="apple-touch-icon">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- DatePicker -->
  <script src="{{ asset('assets2/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
  <!-- Icons -->
  <link rel="stylesheet" href="{{asset('assets2/vendor/nucleo/css/nucleo.css')}}" type="text/css">
  <link rel="stylesheet" href="{{asset('assets2/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
  <!-- Page plugins -->
   {{-- <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"> --}}
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{asset('assets2/css/argon.css?v=1.2.0')}}" type="text/css">
  {{-- editor berita --}}
  <link rel="stylesheet" type="text/css" href="/css/trix.css">
  <script type="text/javascript" src="/js/trix.js"></script>

  <script src="https://cdn.ckeditor.com/ckeditor5/31.0.0/classic/ckeditor.js"></script>
</head>

<body>

  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  align-items-center">
            <a class="navbar-brand" href="{{url('/')}}">
              <img src="{{asset('/images/Logo-UNS-New-04.png')}}" class="navbar-brand-img"  alt="...">
            </a>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Dasbor") ? 'active' : '' }} " href="{{url('/dashboard')}}">
                            <i class="ni ni-tv-2 text-primary"></i>
                            <span class="nav-link-text">Dasbor</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Data PDLN") ? 'active' : '' }}" href="{{url('/pdln')}}">
                            <i class="ni ni-archive-2 text-warning"></i>
                            <span class="nav-link-text">Data PDLN</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Data Mitra") ? 'active' : '' }}" href="{{url('/mitra')}}">
                            <i class="ni ni-folder-17 text-info"></i>
                            <span class="nav-link-text">Data Mitra</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Pengumuman") ? 'active' : '' }}" href="{{url('/pengumuman')}}">
                            <i class="ni ni-notification-70 text-red"></i>
                            <span class="nav-link-text">Pengumuman</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Berita") ? 'active' : '' }}" href="{{url('/berita')}}">
                            <i class="ni ni-books text-orange"></i>
                            <span class="nav-link-text">Berita</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Galeri") ? 'active' : '' }}" href="{{url('/gallery')}}">
                            <i class="ni ni-image text-primary"></i>
                            <span class="nav-link-text">Galeri</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Peringkat") ? 'active' : '' }}" href="{{url('/peringkat')}}">
                            <i class="ni ni-trophy text-yellow"></i>
                            <span class="nav-link-text">Peringkat</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Pengaduan") ? 'active' : '' }}" href="{{url('/pengaduan')}}">
                            <i class="ni ni-send text-primary"></i>
                            <span class="nav-link-text">Pengaduan</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "TJU") ? 'active' : '' }}" href="{{url('/faq')}}">
                            <i class="ni ni-chat-round text-success"></i>
                            <span class="nav-link-text">TJU</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown"><a href="#" data-toggle="dropdown" id="navbarDropdownMenuLink2" class="dropdown-toggle nav-link {{ ($title === "Layanan") ? 'active' : '' }}"><i class="ni ni-single-copy-04 text-dark"></i><span class="nav-link-text">Layanan</span></a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                        <li><a class="dropdown-item" href="{{url('/layanan')}}">Legal Drafting</a></li>
                        <li><a class="dropdown-item" href="{{url('/survey-kepuasan')}}">Survey Kepuasan</a></li>
                      </ul>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link {{ ($title === "Layanan") ? 'active' : '' }}" href="{{url('/layanan')}}">
                            <i class="ni ni-single-copy-04 text-dark"></i>
                            <span class="nav-link-text">Layanan</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Survey Kepuasan") ? 'active' : '' }}" href="{{url('/survey-kepuasan')}}">
                            <i class="ni ni-single-copy-04 text-dark"></i>
                            <span class="nav-link-text">Survey Kepuasan</span>
                        </a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Tajuk") ? 'active' : '' }}" href="{{url('/header')}}">
                            <i class="ni ni-collection text-blue"></i>
                            <span class="nav-link-text">Tajuk</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Daftar Akun") ? 'active' : '' }}" href="{{url('/register')}}">
                            <i class="ni ni-circle-08 text-pink"></i>
                            <span class="nav-link-text">Daftar Akun</span>
                        </a>
                    </li>
                </ul>
                <!-- Divider -->
                <hr class="my-3">
            </div>
        </div>
    </div>
</nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
			@yield('search')
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <!-- Avatar -->
                      <img alt="Gambar Profil" src="{{asset('assets/img/avatar3.png')}}" class="avatar rounded-circle">
                    </div>
                    <div class="col ml--2">
                      <div class="d-flex justify-content-between align-items-center">
                        <div>
                          <span class="mb-0 text-sm  font-weight-bold">{{ auth()->user()->name }}</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Selamat Datang!</h6>
                </div>
                <div class="dropdown-divider"></div>
                <form action="/logout" method="POST" class="dropdown-item">
                    @csrf
                    <button type="submit" class="btn btn-danger">Keluar</button>
                </form>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

@section('title', 'Survey Kepuasan')
<!-- @section('search')
<form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main" action="/survey-kepuasan">
    <div class="form-group mb-0">
        <div class="input-group input-group-alternative input-group-merge">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
            </div>
            <input class="form-control" placeholder="Search" type="text" name="nama_lengkap"
                value="{{ request('nama_lengkap') }}">
        </div>
    </div>
    <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</form>
@endsection -->
@section('container')
<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Data Survey Mitra</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="/survey-kepuasan"> Survey Kepuasan</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Indeks</li>
                        </ol>
                    </nav>
                </div>
                <!-- <div class="col-lg-6 col-5 text-right">
                    <a href="/mitra/create" class="btn btn-sm btn-neutral">Baru</a>
                    <a href="#" class="btn btn-sm btn-neutral">Saring</a>
                </div> -->
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">Data Survey Mitra</h3>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="no">No</th>
                                <th scope="col" class="sort" data-sort="nim">Nama Lengkap</th>
                                <th scope="col" class="sort" data-sort="nama">Alamat Email</th>
                                <th scope="col" class="sort" data-sort="nama">Nomor Telepon/Handphone</th>
                                <th scope="col" class="sort" data-sort="nama">Jabatan</th>
                                <th scope="col" class="sort" data-sort="nama">Instansi</th>
                                <th scope="col" class="sort" data-sort="nama">Alamat Instansi</th>
                                <th scope="col" class="sort" data-sort="nama">Jenis Instansi</th>
                                <th scope="col" class="sort" data-sort="tanggalpeminjaman">Unit Kerjasama</th>
                                <th scope="col" class="sort" data-sort="tanggalpengembalian">Ruang Lingkup</th>
                                <!-- <th scope="col" class="sort" data-sort="namaruang">pejabat</th>
                                <th scope="col" class="sort" data-sort="namaruang">status</th> -->
                                <th scope="col" class="sort" data-sort="aksi">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @foreach($mitra_surveys as $mitra_survey)
                            <tr>
                                <th scope="row">{{ $mitra_surveys->firstItem() + $loop->index }}</th>
                                <td>{{ $mitra_survey->nama_lengkap }}</td>
                                <td>{{ $mitra_survey->email }}</td>
                                <td>{{ $mitra_survey->no_hp }}</td>
                                <td>{{ $mitra_survey->jabatan }}</td>
                                <td>{{ $mitra_survey->instansi }}</td>
                                <td>{{ $mitra_survey->alamat_instansi }}</td>
                                <td>
                                    @foreach ($mitra_survey->instansis as $instansi) 
                                       {{ $loop->iteration }}. {{ $instansi->jenis_instansi->jenis }}<br>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($mitra_survey->kerjasamas as $kerjasama) 
                                        {{ $loop->iteration }}. {{ $kerjasama->unit_kerjasama->unit }}<br>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($mitra_survey->lingkups as $lingkup) 
                                        {{ $loop->iteration }}. {{ $lingkup->ruang_lingkup->ruang }}<br>
                                    @endforeach
                                </td>
                                <td>
                                    <a href="/survey-kepuasan/{{ $mitra_survey->id }}" class="badge badge-info">Detail</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Card footer -->
                <div class="card-footer py-4">
                    <nav aria-label="...">
                        <div class="row">
                            <div class="col">
                                <button data-toggle="modal" data-target="#pertanyaan" class="btn btn-primary mb-3">Grafik Kepuasan</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col"></div>
                            <div class="col"></div>
                            <div class="col">
                                <div style="overflow-x:auto;">
                                    <ul class="pagination pagination-sm mb-3">
                                        <li class="page-item">
                                            {{ $mitra_surveys->links() }}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="pertanyaan" tabindex="-1" role="dialog" aria-labelledby="pertanyaanTitle" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="pertanyaanTitle">Grafik Kepuasan Mitra</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="table-responsive">
                                <table class="table align-items-center table-flush">
                                    <tbody class="list">
                                        @foreach($penilaian_kepuasans as $penilaian_kepuasan)
                                        <tr>
                                            <th scope="row"><a href="#" role="button" data-toggle="popover" class="badge badge-info popover-test" title="Pertanyaan Ke-{{ $penilaian_kepuasan->id }}" data-content="{{ $penilaian_kepuasan->pertanyaan }}">Pertanyaan Ke-{{ $penilaian_kepuasan->id }}</a></th>
                                            <td>
                                                <div class="chart">
                                                    <h5></h5>
                                                    <canvas
                                                        id="chart-q{{ $penilaian_kepuasan->id }}"
                                                        class="chart-canvas"
                                                    ></canvas>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                        </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<!-- End Main content -->
      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg">
            <div class="copyright text-center  text-lg-center  text-muted">
              &copy; 2022 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
              <ul class="nav nav-footer justify-content-center">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
    <script src="{{asset('assets2/vendor/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('assets2/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets2/vendor/js-cookie/js.cookie.js')}}"></script>
    <script src="{{asset('assets2/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
    <script src="{{asset('assets2/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
    <!-- Optional JS -->
    <script src="{{asset('assets2/vendor/chart.js/dist/Chart.min.js')}}"></script>
    <script src="{{asset('assets2/vendor/chart.js/dist/Chart.extension.js')}}"></script>
    <!-- Argon JS -->
    <script src="{{asset('assets2/js/argon.js?v=1.2.0')}}"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    <script>
        var BarsChart = (function () {
          var a = $("#chart-q1");
          a.length &&
            (function (a) {
              var t = new Chart(a, {
                type: "bar",
                data: {
                  labels: ["Kurang Puas", "Puas", "Sangat Puas"],
                  datasets: [{ label: "Responden", data: [
                      {{ $kurang_puases_q1->count() }}, 
                      {{ $puases_q1->count() }}, 
                      {{ $sangat_puases_q1->count() }}
                  ] }],
                },
              });
              a.data('chart', t);
            })(a);
        })();
        var BarsChart = (function () {
          var a = $("#chart-q2");
          a.length &&
            (function (a) {
              var t = new Chart(a, {
                type: "bar",
                data: {
                  labels: ["Kurang Puas", "Puas", "Sangat Puas"],
                  datasets: [{ label: "Responden", data: [
                      {{ $kurang_puases_q2->count() }}, 
                      {{ $puases_q2->count() }}, 
                      {{ $sangat_puases_q2->count() }}
                  ] }],
                },
              });
              a.data('chart', t);
            })(a);
        })();
        var BarsChart = (function () {
          var a = $("#chart-q3");
          a.length &&
            (function (a) {
              var t = new Chart(a, {
                type: "bar",
                data: {
                  labels: ["Kurang Puas", "Puas", "Sangat Puas"],
                  datasets: [{ label: "Responden", data: [
                      {{ $kurang_puases_q3->count() }}, 
                      {{ $puases_q3->count() }}, 
                      {{ $sangat_puases_q3->count() }}
                  ] }],
                },
              });
              a.data('chart', t);
            })(a);
        })();
        var BarsChart = (function () {
          var a = $("#chart-q4");
          a.length &&
            (function (a) {
              var t = new Chart(a, {
                type: "bar",
                data: {
                  labels: ["Kurang Puas", "Puas", "Sangat Puas"],
                  datasets: [{ label: "Responden", data: [
                      {{ $kurang_puases_q4->count() }}, 
                      {{ $puases_q4->count() }}, 
                      {{ $sangat_puases_q4->count() }}
                  ] }],
                },
              });
              a.data('chart', t);
            })(a);
        })();
        var BarsChart = (function () {
          var a = $("#chart-q5");
          a.length &&
            (function (a) {
              var t = new Chart(a, {
                type: "bar",
                data: {
                  labels: ["Kurang Puas", "Puas", "Sangat Puas"],
                  datasets: [{ label: "Responden", data: [
                      {{ $kurang_puases_q5->count() }}, 
                      {{ $puases_q5->count() }}, 
                      {{ $sangat_puases_q5->count() }}
                  ] }],
                },
              });
              a.data('chart', t);
            })(a);
        })();
        var BarsChart = (function () {
          var a = $("#chart-q6");
          a.length &&
            (function (a) {
              var t = new Chart(a, {
                type: "bar",
                data: {
                  labels: ["Kurang Puas", "Puas", "Sangat Puas"],
                  datasets: [{ label: "Responden", data: [
                      {{ $kurang_puases_q6->count() }}, 
                      {{ $puases_q6->count() }}, 
                      {{ $sangat_puases_q6->count() }}
                  ] }],
                },
              });
              a.data('chart', t);
            })(a);
        })();
        var BarsChart = (function () {
          var a = $("#chart-q7");
          a.length &&
            (function (a) {
              var t = new Chart(a, {
                type: "bar",
                data: {
                  labels: ["Kurang Puas", "Puas", "Sangat Puas"],
                  datasets: [{ label: "Responden", data: [
                      {{ $kurang_puases_q7->count() }}, 
                      {{ $puases_q7->count() }}, 
                      {{ $sangat_puases_q7->count() }}
                  ] }],
                },
              });
              a.data('chart', t);
            })(a);
        })();
        var BarsChart = (function () {
          var a = $("#chart-q8");
          a.length &&
            (function (a) {
              var t = new Chart(a, {
                type: "bar",
                data: {
                  labels: ["Kurang Puas", "Puas", "Sangat Puas"],
                  datasets: [{ label: "Responden", data: [
                      {{ $kurang_puases_q8->count() }}, 
                      {{ $puases_q8->count() }}, 
                      {{ $sangat_puases_q8->count() }}
                  ] }],
                },
              });
              a.data('chart', t);
            })(a);
        })();
        var BarsChart = (function () {
          var a = $("#chart-q9");
          a.length &&
            (function (a) {
              var t = new Chart(a, {
                type: "bar",
                data: {
                  labels: ["Kurang Puas", "Puas", "Sangat Puas"],
                  datasets: [{ label: "Responden", data: [
                      {{ $kurang_puases_q9->count() }}, 
                      {{ $puases_q9->count() }}, 
                      {{ $sangat_puases_q9->count() }}
                  ] }],
                },
              });
              a.data('chart', t);
            })(a);
        })();
        var BarsChart = (function () {
          var a = $("#chart-q10");
          a.length &&
            (function (a) {
              var t = new Chart(a, {
                type: "bar",
                data: {
                  labels: ["Kurang Puas", "Puas", "Sangat Puas"],
                  datasets: [{ label: "Responden", data: [
                      {{ $kurang_puases_q10->count() }}, 
                      {{ $puases_q10->count() }}, 
                      {{ $sangat_puases_q10->count() }}
                  ] }],
                },
              });
              a.data('chart', t);
            })(a);
        })();
        var BarsChart = (function () {
          var a = $("#chart-q11");
          a.length &&
            (function (a) {
              var t = new Chart(a, {
                type: "bar",
                data: {
                  labels: ["Kurang Puas", "Puas", "Sangat Puas"],
                  datasets: [{ label: "Responden", data: [
                      {{ $kurang_puases_q11->count() }}, 
                      {{ $puases_q11->count() }}, 
                      {{ $sangat_puases_q11->count() }}
                  ] }],
                },
              });
              a.data('chart', t);
            })(a);
        })();
        var BarsChart = (function () {
          var a = $("#chart-q12");
          a.length &&
            (function (a) {
              var t = new Chart(a, {
                type: "bar",
                data: {
                  labels: ["Kurang Puas", "Puas", "Sangat Puas"],
                  datasets: [{ label: "Responden", data: [
                      {{ $kurang_puases_q12->count() }}, 
                      {{ $puases_q12->count() }}, 
                      {{ $sangat_puases_q12->count() }}
                  ] }],
                },
              });
              a.data('chart', t);
            })(a);
        })();
        var BarsChart = (function () {
          var a = $("#chart-q13");
          a.length &&
            (function (a) {
              var t = new Chart(a, {
                type: "bar",
                data: {
                  labels: ["Kurang Puas", "Puas", "Sangat Puas"],
                  datasets: [{ label: "Responden", data: [
                      {{ $kurang_puases_q13->count() }}, 
                      {{ $puases_q13->count() }}, 
                      {{ $sangat_puases_q13->count() }}
                  ] }],
                },
              });
              a.data('chart', t);
            })(a);
        })();
    </script>
</body>

</html>