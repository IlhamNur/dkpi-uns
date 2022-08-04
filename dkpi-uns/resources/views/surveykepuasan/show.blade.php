@extends('dashboard/layouts/main')

@section('title', 'Data Penilaian Kepuasan')

@section('container')

<!-- Main content -->
<div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Navbar links -->
            </div>
        </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Data Penilaian Kepuasan</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="/survey-kepuasan">Data Penilaian Kepuasan</a></li>
                                {{-- <li class="breadcrumb-item"><a href="#"> {{ $pengaduan->instansi }}</a></li> --}}
                                <li class="breadcrumb-item active" aria-current="page"> {{ $mitra_survey->nama_lengkap }}</li>
                            </ol>
                        </nav>
                    </div>
                    {{-- <div class="col-lg-6 col-5 text-right">
                        <a href="#" class="btn btn-sm btn-neutral">New</a>
                        <a href="#" class="btn btn-sm btn-neutral">Filters</a>
                    </div> --}}
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
                        <h3 class="mb-0">Penilaian Kepuasan oleh {{ $mitra_survey->nama_lengkap}} dari {{ $mitra_survey->instansi}}</h3>
                    </div>

                    <!-- body card -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Penilaian Kepuasan Terhadap Layanan Kepuasan</h5>
                                <p class="card-text">1. Proses penyusunan naskah kerjasama (MoU dan PKS) dengan UNS dilakukan secara cepat dan tepat waktu : {{ $mitra_survey->q1 }}</p>
                                <p class="card-text">2. Tidak terdapat kesulitan dalam prosedur kerjasama yang ditetapkan oleh UNS : {{ $mitra_survey->q2 }}</p>
                                <p class="card-text">3. Pegawai di bidang kerjasama bekerja secara profesional dan responsif dalam memenuhi kebutuhan mitra : {{ $mitra_survey->q3 }}</p>
                                <p class="card-text">4. Pegawai di bidang kerjasama memberikan pelayanan yang santun, ramah, dan bersahabat : {{ $mitra_survey->q4 }}</p>
                                <p class="card-text">5. Tenaga Ahli UNS yang bekerja sama dengan mitra kompeten dan sesuai dengan kepakaran : {{ $mitra_survey->q5 }}</p>
                                <p class="card-text">6. UNS memberikan pendampingan yang baik untuk memenuhi kebutuhan mitra kerjasama : {{ $mitra_survey->q6 }}</p>
                                <p class="card-text">7. Mitra kerjasama memperoleh manfaat dari kerjasama yang terjalin dengan UNS : {{ $mitra_survey->q7 }}</p>
                                <p class="card-text">8. UNS memberikan pendampingan yang baik untuk memenuhi kebutuhan mitra kerjasama : {{ $mitra_survey->q8 }}</p>
                                <p class="card-text">9. UNS secara proaktif menawarkan kepada mitra kerjasama untuk memulai kerjasama baru ataupun melanjutkan kerjasama yang sudah berakhir : {{ $mitra_survey->q9 }}</p>
                                <p class="card-text">10. UNS secara proaktif menghubungi mitra kerjasama untuk perencanaan implementasi sebagai tindak lanjut MoU yang telah ditandatangani : {{ $mitra_survey->q10 }}</p>
                                <p class="card-text">11. Laporan akhir kerjasama dikomunikasikan dengan baik dan tepat waktu : {{ $mitra_survey->q11 }}</p>
                                <p class="card-text">12. Laporan akhir kerjasama dikomunikasikan dengan baik dan tepat waktu : {{ $mitra_survey->q12 }}</p>
                                <p class="card-text">13. Mitra kerjasama tertarik untuk menjalin kerjasama kembali dengan UNS di masa mendatang : {{ $mitra_survey->q13 }}</p>
                            <h5 class="card-title">Rencana Tindak Lanjut dan Saran Perbaikan</h5>
                                <p class="card-text">1. Hal-hal yang dibutuhkan institusi Kami terkait keberlanjutan kerjasama di masa yang akan datang : {{ $mitra_survey->saran1 }}</p>
                                <p class="card-text">2. Pendapat Kami secara keseluruhan tentang pelayanan UNS dalam kegiatan kerjasama : {{ $mitra_survey->saran2 }}</p>
                            {{-- <a href="{{ $pengaduan->id }}/edit" class="btn btn-primary">Edit</a> --}}
                            <form action="{{ $mitra_survey->id }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?')">Hapus</button>
                            </form>
                            <a href="/survey-kepuasan" class="card-link ml-5">Kembali</a>
                        </div>
                    </div>

                    <!-- Card footer -->
                    {{-- <div class="card-footer py-4">
                        <nav aria-label="...">
                            <ul class="pagination justify-content-end mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">
                                        <i class="fas fa-angle-left"></i>
                                        <span class="sr-only">Sebelumnya</span>
                                    </a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2 <span class="sr-only">(Saat Ini)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="fas fa-angle-right"></i>
                                        <span class="sr-only">Selanjutnya</span> --}}
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main content -->
    @endsection
