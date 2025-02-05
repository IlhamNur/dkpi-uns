
<?php $__env->startSection('container'); ?>

<!-- ======= THES Section ======= -->
<br>
<br>
<section id="portfolio" class="portfolio" style="background-color: #f3f5fa">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Peringkat UNS</h2>
            <p>Dari tahun ke tahun, UNS terus meningkatkan mutu dan layanan </p>
        </div>
        <div class="container">
            <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <a class="filter-active" href="/home/thes">THES</a>
                <a href="/home/qstar">QS Star</a>
            </ul>
        </div>

        <section id="portfolio-details" class="portfolio-details">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper-container">
                            <div class="align-items-center">

                                <div class="swiper-slide">
                                    <img src="<?php echo e(asset('assets/img/THES.jpg')); ?>" alt="">
                                </div>

                                <!-- <div class="swiper-slide">
                                    <img src="<?php echo e(asset('assets/img/THES.jpg')); ?>" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="<?php echo e(asset('assets/img/THES.jpg')); ?>" alt="">
                                </div> -->

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info" style="background-color: rgb(248, 248, 248)">
                            <h3>Informasi</h3>
                            <?php $__currentLoopData = $thess; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $thes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <h2 class="text-capitalize"><?php echo e($thes->judul); ?></h2>
                            <ul>
                                <li><strong>Kategori</strong>&nbsp;:&nbsp;<?php echo e($thes->jenis); ?></li>
                                <li><strong>Peringkat</strong>&nbsp;:&nbsp; <?php echo e($thes->peringkat); ?></li>
                                <li><strong>Update</strong>&nbsp;:&nbsp; <?php echo e($thes->updated_at); ?></li>
                                <li><strong>Sumber</strong>&nbsp;: <a href="<?php echo e($thes->link); ?>"><?php echo e($thes->link); ?></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="portfolio-description">
                        <h2 class="text-capitalize"><?php echo e($thes->judul); ?></h2>
                        <p><?php echo $thes->berita; ?></p>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </section><!-- End Details Section -->
    </div>
</section><!-- End Section -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ilham\Documents\Internship\dkpi-uns\resources\views/home/peringkat/thes.blade.php ENDPATH**/ ?>