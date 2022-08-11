@extends('dashboard/layouts/main')

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
@endsection