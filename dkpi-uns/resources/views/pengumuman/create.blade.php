@extends('dashboard/layouts/main')

@section('title', 'Tambah Pengumuman')

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
                        <h6 class="h2 text-white d-inline-block mb-0">Format Tambah pengumuman</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="/oengumuman"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="/pengumuman"> Pengumuman</a></li>
                                <li class="breadcrumb-item active" aria-current="page"> Tambah</li>
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
                        <h3 class="mb-0">Tambah Pengumuman</h3>
                    </div>

                    <!-- body card -->
                    <form method="POST" action="/pengumuman" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group ml-5 mr-5">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control  @error('judul') is-invalid @enderror" id="judul" placeholder="Isi judul" name="judul" value="{{ old('judul') }}">
                            @error('judul')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group ml-5 mr-5">
                            <label for="pengumuman">Isi Pengumuman</label>
                            <textarea class="form-control  @error('pengumuman') is-invalid @enderror" id="editor" id="pengumuman" placeholder="Isi Pengumuman" name="pengumuman" value="{{ old('pengumuman') }}">
                          	</textarea>
                            @error('pengumuman')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group ml-5 mr-5">
                            <label for="berlaku">Berlaku Hingga</label>
                            <input type="date" class="form-control  @error('berlaku') is-invalid @enderror" id="berlaku" placeholder="berlaku hingga" name="berlaku" value="{{ old('berlaku') }}">
                            @error('berlaku')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group ml-5 mr-5">
                            <label for="link"> Tautan</label>
                            <input type="text" class="form-control  @error('link') is-invalid @enderror" id="link" placeholder="tautan" name="link" value="{{ old('link') }}">
                            @error('link')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group ml-5 mr-5">
                            <label for="file_download">Berkas Unduhan</label>
                            <input type="file" class="form-control @error('file_download') is-invalid @enderror" id="file_download" placeholder="catatan" name="file_download" value="{{ old('kapasistas_ruang') }}">
                            @error('file_download')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary ml-5 mb-5">Kirim</button>
                    </form>

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
                                        <span class="sr-only">Selanjutnya</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- End Main content -->
    @endsection
