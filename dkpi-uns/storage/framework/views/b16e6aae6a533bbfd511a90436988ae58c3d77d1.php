
<?php $__env->startSection('container'); ?>

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container">
        <div class="row" data-aos="fade-up">
            <div class="col-xl-8 stretch-card grid-margin hero-img" data-aos="zoom-in" data-aos-delay="200">
                <div class="position-relative">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <?php $__currentLoopData = $headers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $header): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="carousel-item <?php echo e($key == 0 ? 'active' : ''); ?>">
                                <img src="<?php echo e(asset('storage/'. $header->gambar )); ?>" class="d-block w-100" alt="...">
                              	<h2 class="bottom-left"><?php echo e($header->nama); ?></h2>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 stretch-card">
                <div class="card bg-light text-black" data-aos="zoom-in" data-aos-delay="200">
                    <div class="card-body">
                        <h2 data-aos="zoom-in" data-aos-delay="300">Terkini</h2>
                        <div class="icon-box border-bottom-blue pt-3 pb-4" data-aos="zoom-in" data-aos-delay="300">
                            <?php $__currentLoopData = $pengumumans->take(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $peng): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          	<div class="pr-3">
                                <a href="/home/pengumumandetails/<?php echo e($peng->id); ?>"><h5 ml-2><?php echo e(substr($peng->judul, 0, 60)."..."); ?></h5></a>
                                <div class="fs-12">
                                    <span class="mr-2"><?php echo e($peng->created_at->diffForHumans()); ?></span>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                      
                        <div class="icon-box border-bottom-blue pb-4 pt-4" data-aos="zoom-in" data-aos-delay="400">
                            <?php $__currentLoopData = $beritas->take(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ber): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          	<div class="pr-3">
                                <a href="/home/berita/beritadetails/<?php echo e($ber->id); ?>"> <h5><?php echo e(substr($ber->judul, 0, 60)."..."); ?></h5></a>
                                <div class="fs-12">
                                    <span class="mr-2"><?php echo e($ber->created_at->diffForHumans()); ?> </span>
                                </div>
                            </div>
                          	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                        <div class="icon-box border-bottom-blue pt-4" data-aos="zoom-in" data-aos-delay="500">
                            <div class="pr-3">
                                <a href="https://www.youtube.com/channel/UCrjcKCvCFXWn6qWDMmLyCAg/"><h5 id="video-title"></h5></a>
                            </div>
                            <iframe class="latestVideoEmbed" vnum='0' cid="UCrjcKCvCFXWn6qWDMmLyCAg" frameborder="0" allow=" autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                            <script>
                                var reqURL = "https://api.rss2json.com/v1/api.json?rss_url=" + encodeURIComponent("https://www.youtube.com/feeds/videos.xml?channel_id=");

                                function loadVideo(iframe) {
                                $.getJSON(reqURL + iframe.getAttribute('cid'),
                                    function(data) {
                                    var videoNumber = (iframe.getAttribute('vnum') ? Number(iframe.getAttribute('vnum')) : 0);
                                    console.log(videoNumber);
                                    var link = data.items[videoNumber].link;
                                    var title=data.items[videoNumber].title;
                                    id = link.substr(link.indexOf("=") + 1);
                                    iframe.setAttribute("src", "https://youtube.com/embed/" + id + "?controls=0&autoplay=1");
                                  	var titleslice = title.slice(0, 60);
                                    iframe.parentElement.querySelector("#video-title").innerText = titleslice + "...";
                                    }
                                );
                                }

                                var iframes = document.getElementsByClassName('latestVideoEmbed');
                                for (var i = 0, len = iframes.length; i < len; i++) {
                                loadVideo(iframes[i]);
                                }
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            <!-- <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-1 order-lg-2"
                data-aos="fade-up" data-aos-delay="200">
                <h1>Direktorat Kerjasama, Pengembangan dan Internasionalisasi</h1>
                <h2>Universitas Sebelas Maret</h2>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="#about" class="btn-get-started scrollto">Get Started</a>
                    <a href="https://youtu.be/QvqNUeE7A74" class="glightbox btn-watch-video"><i
                            class="bi bi-play-circle"></i><span>Watch Video</span></a>
                </div>
            </div> -->
        </div>
    </div>  
</section>

<!-- End Cliens Section -->

<!-- ======= Berita Section ======= -->
<section id="berita" class="berita section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Berita</h2>
            <p>Berisi informasi berupa berita terkait hubungan kerjasama.</p>
        </div>
        <div class="row">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <?php $__currentLoopData = $beritas->skip(0); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $berita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col">
                            <div class="card h-100">
                                <img src="<?php echo e(asset('storage/'. $berita->gambar )); ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo e($berita->judul); ?></h5>
                                    <p class="card-text"><?php echo substr($berita->excerpt, 0, 200)."..."; ?>

                                        <left> <a href="/home/berita/beritadetails/<?php echo e($berita->id); ?>"
                                                class="btn-learn-more">Baca Selengkapnya...</a></left>
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted"><?php echo e($berita->created_at->diffForHumans()); ?></small>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center pt-5">
            <a href="/home/berita/" class="btn btn-outline-primary">Selengkapnya</a>
        </div>
    </div>
</section><!-- End Section -->

<!-- ======= About Us Section =======
<section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>About Us</h2>
        </div>

        <div class="row content">
            <div class="col-lg-12">
                <p style="font-weight: bold">
                    Tugas dan Fungsi
                </p>
                <ul>
                    <p>Direktorat dan Kerjasama, Pengembangan dan Internasionalisasi mempunyai tugas melaksanakan urusan
                        hukum dan pengembangan kegiatan kerja sama</p>
                    <li><i class="ri-check-double-line"></i> Pelaksanaan penyusunan peraturan perundang-undangan dan
                        layanan hukum</li>
                    <li><i class="ri-check-double-line"></i> Pelaksanaan koordinasi pelaksanaan program kerja sama dalam
                        negeri</li>
                    <li><i class="ri-check-double-line"></i> Pelaksanaan kegiatan kerja sama dalam negeri</li>
                    <li><i class="ri-check-double-line"></i> Pelaksanaan administrasi kerja sama dalam dan luar negeri
                    </li>
                    <li><i class="ri-check-double-line"></i> Pelaksanaan evaluasi dan pelaporan kegiatan kerja sama</li>
                </ul>
            </div>
        </div>
    </div>
</section> End About Us Section -->

<!-- ======= Layanan Section ======= -->
<section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Layanan</h2>
            <p>Direktorat Kerjasama, Pengembangan, dan Internasionalisasi (DKPI) UNS menyediakan layanan yang dapat
                diakses dalam beberapa hal sebagai berikut</p>
        </div>

        <div class="row">
            <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon-box">
                    <div class="icon"><i class="bx bx-file"></i></div>
                    <h4><a href="/layanan/legaldrafting">Penyusunan Naskah Hukum</a></h4>
                    <p>Perancangan naskah hukum / perancangan kontrak atau MoU.</p>
                    <a href="/layanan/legaldrafting" class="btn-learn-more">Baca Selengkapnya</a>
                </div>
            </div>

            <!-- <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                data-aos-delay="200">
                <div class="icon-box">
                    <div class="icon"><i class="bx bx-file"></i></div>
                    <h4><a href="">Pengembangan PSDKU</a></h4>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                    <a href="#" class="btn-learn-more">Baca Selengkapnya</a>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                data-aos-delay="300">
                <div class="icon-box">
                    <div class="icon"><i class="bi bi-cash-coin"></i></div>
                    <h4><a href="">Pencairan Dana Kerjasama</a></h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                    <a href="#" class="btn-learn-more">Baca Selengkapnya</a>
                </div>
            </div> -->

            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                <div class="icon-box">
                <div class="icon"><i class="bx bx-user"></i></div>
                <h4><a href="/layanan/ijinpdln">Pemrosesan Surat Izin</a></h4>
                <p>Permohonan izin perjalanan dinas luar negeri.</p>
                <a href="/layanan/ijinpdln" class="btn-learn-more">Baca Selengkapnya</a>
                </div>
            </div>
            
            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
                <div class="icon-box">
                    <div class="icon"><i class="bx bx-help-circle icon-help"></i></div>
                    <h4><a href="/layanan/surveykepuasan">Survey Kepuasan Pelayanan</a></h4>
                    <p>Pengisian kuesioner berdasarkan pelayanan yang telah kami berikan.</p>
                    <a href="/layanan/surveykepuasan" class="btn-learn-more">Baca Selengkapnya</a>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Layanan Section -->


<!-- ======= PDLN Section ======= -->
<section id="data-pdln" class="pdln section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Data PDLN</h2>
            <p>Perjalanan Dinas Luar Negeri (PDLN) adalah adalah penugasan yang dilakukan oleh mahasiswa, dosen, maupun
                pimpinan dalam rangka tugas belajar dan tugas dinas lainnya di luar negeri yang disetujui oleh Rektor
                UNS</p>
        </div>

        <div class="row">
            <div class="col-xl-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon-box">
                    <div class="icon"><i class="bi bi-people-fill"></i></div>
                    <h4><a href="/home/pdln-mahasiswa">Mahasiswa</a></h4>
                    <p>Data mahasiswa yang melakukan perjalanan dinas ke luar negeri dalam rangka tugas belajar maupun
                        tugas lainnya dapat dilihat disini</p>
                    <a href="/home/pdln-mahasiswa" class="btn-learn-more">Baca Selengkapnya</a>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                data-aos-delay="200">
                <div class="icon-box">
                    <div class="icon"><i class="bx bx-file"></i></div>
                    <h4><a href="/home/pdln-dosen">Dosen</a></h4>
                    <p>Data Dosen yang melakukan perjalanan dinas ke luar negeri dalam rangka tugas belajar, penelitian,
                        maupun tugas lainnya dapat dilihat disini</p>
                    <a href="/home/pdln-dosen" class="btn-learn-more">Baca Selengkapnya</a>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                data-aos-delay="300">
                <div class="icon-box">
                    <div class="icon"><i class="bx bx-user"></i></div>
                    <h4><a href="/home/pdln-pimpinan">Pimpinan</a></h4>
                    <p>Data pejabat UNS yang melakukan perjalanan dinas ke luar negeri dalam rangka diplomasi maupun
                        tugas lainnya dapat dilihat disini</p>
                    <a href="/home/pdln-pimpinan" class="btn-learn-more">Baca Selengkapnya</a>
                </div>
            </div>

        </div>

    </div>
</section><!-- End PDLN Section -->

<!-- ======= Pengumuman Section ======= -->
<section id="team" class="skills">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Pengumuman</h2>
            <p>Informasi terkait Direktorat Kerjasama, pengembangan, dan Internasionalisasi dapat dilihat pada kolom
                berikut </p>
        </div>

        <div class="card">
            <div class="card-header" style="background-color: rgb(214, 0, 0)">
                <bold style="color: white">INFORMASI !!!</bold>
            </div>
            <?php $__currentLoopData = $pengumumans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pengumuman): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card-body">
                <h5 class="card-title"><?php echo e($pengumuman->judul); ?></h5>
                <p class="card-text"><?php echo e($pengumuman->excerpt); ?></p>
                <a href="/home/pengumumandetails/<?php echo e($pengumuman->id); ?>">Selengkapnya</a>
            </div>
            <!-- garis -->
            <hr />
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

    </div>
</section><!-- End Pengumuman Section -->

<!-- ======= Frequently Asked Questions Section ======= -->
<section id="faq" class="faq section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Tanya Jawab Umum</h2></a>
        </div>

        <div class="faq-list">
            <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <ul>
                <li data-aos="fade-up" data-aos-delay="<?php echo e($i = $loop->iteration); ?>00">
                    <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                        class="collapse text-capitalize" data-bs-target="#faq-list-<?php echo e($i); ?>"><?php echo e($faq->pertanyaan); ?> <i
                            class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-<?php echo e($i); ?>" class="collapse show" data-bs-parent=".faq-list">
                        <p><?php echo $faq->jawaban; ?></p>
                        <a href="<?php echo e($faq->link); ?>">Selengkapnya</a>
                    </div>
                </li>
            </ul>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

    </div>
</section><!-- End Frequently Asked Questions Section -->

<!-- ======= Contact Section ======= -->
    <?php echo $__env->make('contact.contact', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </main><!-- End #main-->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ilham\Documents\Internship\dkpi-uns\dkpi-uns\resources\views/home/index.blade.php ENDPATH**/ ?>