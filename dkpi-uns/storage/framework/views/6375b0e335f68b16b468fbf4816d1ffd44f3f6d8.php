

<?php $__env->startSection('title', 'Survey Kepuasan'); ?>
<!-- <?php $__env->startSection('search'); ?>
<form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main" action="/survey-kepuasan">
    <div class="form-group mb-0">
        <div class="input-group input-group-alternative input-group-merge">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
            </div>
            <input class="form-control" placeholder="Search" type="text" name="nama_lengkap"
                value="<?php echo e(request('nama_lengkap')); ?>">
        </div>
    </div>
    <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</form>
<?php $__env->stopSection(); ?> -->
<?php $__env->startSection('container'); ?>
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
                            <?php $__currentLoopData = $mitra_surveys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mitra_survey): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th scope="row"><?php echo e($mitra_surveys->firstItem() + $loop->index); ?></th>
                                <td><?php echo e($mitra_survey->nama_lengkap); ?></td>
                                <td><?php echo e($mitra_survey->email); ?></td>
                                <td><?php echo e($mitra_survey->no_hp); ?></td>
                                <td><?php echo e($mitra_survey->jabatan); ?></td>
                                <td><?php echo e($mitra_survey->instansi); ?></td>
                                <td><?php echo e($mitra_survey->alamat_instansi); ?></td>
                                <td>
                                    <?php $__currentLoopData = $mitra_survey->instansis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $instansi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                       <?php echo e($loop->iteration); ?>. <?php echo e($instansi->jenis_instansi->jenis); ?><br>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td>
                                    <?php $__currentLoopData = $mitra_survey->kerjasamas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kerjasama): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                        <?php echo e($loop->iteration); ?>. <?php echo e($kerjasama->unit_kerjasama->unit); ?><br>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td>
                                    <?php $__currentLoopData = $mitra_survey->lingkups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lingkup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                        <?php echo e($loop->iteration); ?>. <?php echo e($lingkup->ruang_lingkup->ruang); ?><br>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td>
                                    <a href="/survey-kepuasan/<?php echo e($mitra_survey->id); ?>" class="badge badge-info">Detail</a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                                            <?php echo e($mitra_surveys->links()); ?>

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
                                        <?php $__currentLoopData = $penilaian_kepuasans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $penilaian_kepuasan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <th scope="row"><a href="#" role="button" data-toggle="popover" class="badge badge-info popover-test" title="Pertanyaan Ke-<?php echo e($penilaian_kepuasan->id); ?>" data-content="<?php echo e($penilaian_kepuasan->pertanyaan); ?>">Pertanyaan Ke-<?php echo e($penilaian_kepuasan->id); ?></a></th>
                                            <td>
                                                <div class="chart">
                                                    <h5></h5>
                                                    <canvas
                                                        id="chart-q<?php echo e($penilaian_kepuasan->id); ?>"
                                                        class="chart-canvas"
                                                    ></canvas>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard/layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ilham\Documents\Internship\dkpi-uns\dkpi-uns\resources\views/surveykepuasan/index.blade.php ENDPATH**/ ?>