

<?php $__env->startSection('title', 'Data Pengumuman'); ?>

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
                        <h6 class="h2 text-white d-inline-block mb-0">Data Pengumuman</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="/pengumuman"> Pengumuman</a></li>
                                <li class="breadcrumb-item active" aria-current="page"> <?php echo e($pengumuman->judul); ?></li>
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
                        <h3 class="mb-0">Detail Pengumuman</h3>
                    </div>

                    <!-- body card -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Judul : <?php echo e($pengumuman->judul); ?></h5>
                            <p class="card-text">Pengumuman : <?php echo $pengumuman->pengumuman; ?></p>
                            <p class="card-text">Tautan : <?php echo e($pengumuman->link); ?></p>
                            <p class="card-text">Berlaku Sampai : <?php echo e($pengumuman->berlaku); ?></p>
                            <a href="/pengumuman/download/pengumuman/<?php echo e($pengumuman->id); ?>"
                                class="btn btn-warning">Download File Pengumuman</a>
                            <a href="<?php echo e($pengumuman->id); ?>/edit" class="btn btn-primary">Edit</a>
                            <form action="<?php echo e($pengumuman->id); ?>" method="POST" class="d-inline">
                                <?php echo method_field('delete'); ?>
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="btn btn-danger mt-2"
                                    onclick="return confirm('Apakah Anda Yakin?')">Hapus</button>
                            </form>
                            <a href="/pengumuman" class="card-link ml-5">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard/layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/dkpiuns/dkpi-uns/resources/views/pengumuman/show.blade.php ENDPATH**/ ?>