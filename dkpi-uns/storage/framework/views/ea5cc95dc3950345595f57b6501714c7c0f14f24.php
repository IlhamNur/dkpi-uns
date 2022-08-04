

<?php $__env->startSection('title', 'Data Penilaian Kepuasan'); ?>

<?php $__env->startSection('container'); ?>

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
                                
                                <li class="breadcrumb-item active" aria-current="page"> <?php echo e($mitra_survey->nama_lengkap); ?></li>
                            </ol>
                        </nav>
                    </div>
                    
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
                        <h3 class="mb-0">Penilaian Kepuasan oleh <?php echo e($mitra_survey->nama_lengkap); ?> dari <?php echo e($mitra_survey->instansi); ?></h3>
                    </div>

                    <!-- body card -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Penilaian Kepuasan Terhadap Layanan Kepuasan</h5>
                                <p class="card-text">1. Proses penyusunan naskah kerjasama (MoU dan PKS) dengan UNS dilakukan secara cepat dan tepat waktu : <?php echo e($mitra_survey->q1); ?></p>
                                <p class="card-text">2. Tidak terdapat kesulitan dalam prosedur kerjasama yang ditetapkan oleh UNS : <?php echo e($mitra_survey->q2); ?></p>
                                <p class="card-text">3. Pegawai di bidang kerjasama bekerja secara profesional dan responsif dalam memenuhi kebutuhan mitra : <?php echo e($mitra_survey->q3); ?></p>
                                <p class="card-text">4. Pegawai di bidang kerjasama memberikan pelayanan yang santun, ramah, dan bersahabat : <?php echo e($mitra_survey->q4); ?></p>
                                <p class="card-text">5. Tenaga Ahli UNS yang bekerja sama dengan mitra kompeten dan sesuai dengan kepakaran : <?php echo e($mitra_survey->q5); ?></p>
                                <p class="card-text">6. UNS memberikan pendampingan yang baik untuk memenuhi kebutuhan mitra kerjasama : <?php echo e($mitra_survey->q6); ?></p>
                                <p class="card-text">7. Mitra kerjasama memperoleh manfaat dari kerjasama yang terjalin dengan UNS : <?php echo e($mitra_survey->q7); ?></p>
                                <p class="card-text">8. UNS memberikan pendampingan yang baik untuk memenuhi kebutuhan mitra kerjasama : <?php echo e($mitra_survey->q8); ?></p>
                                <p class="card-text">9. UNS secara proaktif menawarkan kepada mitra kerjasama untuk memulai kerjasama baru ataupun melanjutkan kerjasama yang sudah berakhir : <?php echo e($mitra_survey->q9); ?></p>
                                <p class="card-text">10. UNS secara proaktif menghubungi mitra kerjasama untuk perencanaan implementasi sebagai tindak lanjut MoU yang telah ditandatangani : <?php echo e($mitra_survey->q10); ?></p>
                                <p class="card-text">11. Laporan akhir kerjasama dikomunikasikan dengan baik dan tepat waktu : <?php echo e($mitra_survey->q11); ?></p>
                                <p class="card-text">12. Laporan akhir kerjasama dikomunikasikan dengan baik dan tepat waktu : <?php echo e($mitra_survey->q12); ?></p>
                                <p class="card-text">13. Mitra kerjasama tertarik untuk menjalin kerjasama kembali dengan UNS di masa mendatang : <?php echo e($mitra_survey->q13); ?></p>
                            <h5 class="card-title">Rencana Tindak Lanjut dan Saran Perbaikan</h5>
                                <p class="card-text">1. Hal-hal yang dibutuhkan institusi Kami terkait keberlanjutan kerjasama di masa yang akan datang : <?php echo e($mitra_survey->saran1); ?></p>
                                <p class="card-text">2. Pendapat Kami secara keseluruhan tentang pelayanan UNS dalam kegiatan kerjasama : <?php echo e($mitra_survey->saran2); ?></p>
                            
                            <form action="<?php echo e($mitra_survey->id); ?>" method="POST" class="d-inline">
                                <?php echo method_field('delete'); ?>
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?')">Hapus</button>
                            </form>
                            <a href="/survey-kepuasan" class="card-link ml-5">Kembali</a>
                        </div>
                    </div>

                    <!-- Card footer -->
                    
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
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard/layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ilham\Documents\Internship\dkpi-uns\resources\views/surveykepuasan/show.blade.php ENDPATH**/ ?>