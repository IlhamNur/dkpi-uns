@extends('layouts.main')
@section('container')

<!-- ======= Survey Kepuasan Section ======= -->
<br>
<br>
<section id="data-pdln" class="services section-bg">
    <div class="container" data-aos="fade-up">

        @if(session()->has('success'))
          <div class="alert alert-success">
            {{ session()->get('success') }}
          </div>
        @endif

        <div class="section-title">
            <h2>Survey Kepuasan</h2>
          	<p>Kami menyampaikan terima kasih dan penghargaan atas kesediaan Bapak/Ibu menjadi mitra di Universitas Sebelas Maret (UNS). Dalam rangka upaya peningkatan kualitas pelayanan, kami mohon kesediaan Bapak/Ibu untuk mengisi kuesioner ini berdasarkan pelayanan yang telah kami berikan selama instansi Bapak/Ibu bekerja sama dengan Universitas Sebelas Maret (UNS). Hasil isian kuesioner ini akan sangat bermanfaat bagi pengembangan pelayanan kami selanjutnya. Terima kasih.</p>
        </div>

        <div class="align-items-stretch">
          <form action="{{ route('survey.save') }}" method="post" role="form" class="php-email-form2">
            <h2><span class="badge mb-3 pl-2" style="background-color: rgba(190, 35, 121, 0.75)">DATA MITRA KERJASAMA</span></h2>
            @csrf
            <div class="row">
              <div class="form-group col-md-6 mb-3">
                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
                @error('nama_lengkap')
                  <span class="text-danger"> {{ $message }} </span>
                @enderror
              </div><br><br>
              <div class="form-group col-md-6 mb-3">
                  <label for="jabatan" class="form-label">Jabatan</label>
                <input type="text" class="form-control" id="jabatan" name="jabatan" required>
                @error('jabatan')
                  <span class="text-danger"> {{ $message }} </span>
                @enderror
              </div>
            </div><br>

            <div class="row">
              <div class="form-group col-md-6 mb-3">
                <label for="email" class="form-label">Alamat Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
                @error('email')
                  <span class="text-danger"> {{ $message }} </span>
                @enderror
              </div><br><br>
              <div class="form-group col-md-6 mb-3">
                <label for="instansi" class="form-label">Instansi</label>
                <input type="text" class="form-control" id="instansi" name="instansi" required>
                @error('instansi')
                  <span class="text-danger"> {{ $message }} </span>
                @enderror
              </div>
            </div><br>

            <div class="row">
              <div class="form-group col-md-6 mb-3">
                <label for="no_hp" class="form-label">Nomor Telepon/Handphone</label>
                <input type="tel" class="form-control" id="no_hp"  name="no_hp" required>
                @error('no_hp')
                  <span class="text-danger"> {{ $message }} </span>
                @enderror
              </div>
              <div class="form-group col-md-6 mb-3">
                <label for="alamat_instansi" class="form-label">Alamat Instansi</label>
                <input type="text" class="form-control" id="alamat_instansi" name="alamat_instansi" required>
                @error('alamat_instansi')
                  <span class="text-danger"> {{ $message }} </span>
                @enderror
              </div>
            </div><br>

            <div class="row">
              <div class="form-group col-md-6 mb-3">
                <label class="form-label">Ruang Lingkup Kerjasama</label><br><br>
                @foreach ($ruang_lingkups as $ruang_lingkup)
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="{{$ruang_lingkup->ruang}}" name="ruang_lingkup[]" value="{{$ruang_lingkup->id}}" >
                  <label class="form-check-label" for="{{$ruang_lingkup->ruang}}">{{$ruang_lingkup->ruang}}</label><br><br>
                </div>
                @endforeach
                @error('ruang_lingkup')
                  <span class="text-danger"> {{ $message }} </span>
                @enderror
              </div>
              <div class="form-group col-md-6 mb-3">
                <label class="form-label">Jenis Instansi</label><br><br>
                @foreach ($jenis_instansis as $jenis_instansi) 
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="{{$jenis_instansi->jenis}}" name="jenis_instansi[]" value="{{$jenis_instansi->id}}">
                  <label class="form-check-label" for="{{$jenis_instansi->jenis}}">{{$jenis_instansi->jenis}}</label><br><br>
                </div>
                @endforeach
                @error('jenis_instansi')
                  <span class="text-danger"> {{ $message }} </span>
                @enderror
              </div>
              <div class="form-group mb-3 col-md-6">
                <label class="form-label">Kerjasama dengan Unit di UNS</label><br><br>
                @foreach ($unit_kerjasamas as $unit_kerjasama)
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="{{$unit_kerjasama->unit}}" name="unit_kerjasama[]" value="{{$unit_kerjasama->id}}" >
                  <label class="form-check-label" for="{{$unit_kerjasama->unit}}">{{$unit_kerjasama->unit}}</label><br><br>
                </div>
                @endforeach
                @error('unit_kerjasama')
                  <span class="text-danger"> {{ $message }} </span>
                @enderror
              </div>
            </div>

            <h2><span class="badge mt-3 mb-3 pl-2" style="background-color: rgba(190, 35, 121, 0.75)">PENILAIAN KEPUASAN TERHADAP LAYANAN KERJASAMA</span></h2>
            <div class="container">
              @foreach($keterangans as $keterangan)
              <div class="row">
                <div class="col-1">
                  <ol class="list-group list-group-numbered">
                    <h3><span class="badge" style="background-color: rgba(108, 88, 179, 0.75)">{{ $keterangan -> id }}</span></h3>
                  </ol>
                </div>
                &nbsp;<div class="col-10 mb-4" style="align-left">{{ $keterangan -> keterangan }}
                </div>
              </div>
              @endforeach
              <br>
              <br>
            
            <div class="row">
              @foreach($penilaian_kepuasans as $penilaian_kepuasan)
              <div class="form-group col-md-6 mb-3">
                <label class="form-label">{{ $penilaian_kepuasan -> pertanyaan }}</label><br><br>
                @foreach($keterangans as $keterangan)
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="q{{$penilaian_kepuasan->id}}" id="{{ $keterangan -> id }}" value="{{ $keterangan ->keterangan }}">
                  <label class="form-check-label" for="{{ $keterangan -> id }}">{{ $keterangan -> id }}</label><br><br>
                </div>
                @endforeach
                @error('q{{$penilaian_kepuasan->id}}')
                  <span class="text-danger"> {{ $message }} </span>
                @enderror
              </div>
              @endforeach
            </div>

            <h2><span class="badge mt-3 mb-3 pl-2" style="background-color: rgba(190, 35, 121, 0.75)">RENCANA TINDAK LANJUT DAN SARAN PERBAIKAN</span></h2>
            @csrf
            <div class="row">
              <div class="form-group col-md-6 mb-3">
                <label for="saran1">Mohon kesediaan Bapak/Ibu menyebutkan hal-hal yang dibutuhkan institusi Bapak/Ibu terkait keberlanjutan kerjasama di masa yang akan datang</label><br><br>
                <textarea class="form-control" name="saran1" rows="10" required></textarea>
                @error('saran1')
                <span class="text-danger"> {{ $message }} </span>
                @enderror
              </div>
              <div class="form-group col-md-6 mb-3">
                <label for="saran2">Mohon tuliskan pendapat Bapak/Ibu secara keseluruhan tentang pelayanan UNS dalam kegiatan kerjasama</label><br><br>
                <textarea class="form-control" name="saran2" rows="10" required></textarea>
                @error('saran2')
                <span class="text-danger"> {{ $message }} </span>
                @enderror
              </div>
            </div>
            
            <br>
            <center>
            <div class="d-grid gap-5 d-md-block">
                <input class="btn btn-primary" type="submit" value="Kirim">
              </div>
          </center>

          </form>
        </div>
</section> <!-- End Section -->
@endsection

