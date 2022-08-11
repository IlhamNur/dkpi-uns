
<?php $__env->startSection('container'); ?>

<!-- ======= Survey Kepuasan Section ======= -->
<br>
<br>
<section id="data-pdln" class="services section-bg">
    <div class="container" data-aos="fade-up">

        <?php if(session()->has('success')): ?>
          <div class="alert alert-success">
            <?php echo e(session()->get('success')); ?>

          </div>
        <?php endif; ?>

        <div class="section-title">
            <h2>Survey Kepuasan</h2>
          	<p>Kami menyampaikan terima kasih dan penghargaan atas kesediaan Bapak/Ibu menjadi mitra di Universitas Sebelas Maret (UNS). Dalam rangka upaya peningkatan kualitas pelayanan, kami mohon kesediaan Bapak/Ibu untuk mengisi kuesioner ini berdasarkan pelayanan yang telah kami berikan selama instansi Bapak/Ibu bekerja sama dengan Universitas Sebelas Maret (UNS). Hasil isian kuesioner ini akan sangat bermanfaat bagi pengembangan pelayanan kami selanjutnya. Terima kasih.</p>
        </div>

        <div class="align-items-stretch">
          <form action="<?php echo e(route('survey.save')); ?>" method="post" role="form" class="php-email-form2">
            <h2><span class="badge mb-3 pl-2" style="background-color: rgba(190, 35, 121, 0.75)">DATA MITRA KERJASAMA</span></h2>
            <?php echo csrf_field(); ?>
            <div class="row">
              <div class="form-group col-md-6 mb-3">
                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
                <?php $__errorArgs = ['nama_lengkap'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <span class="text-danger"> <?php echo e($message); ?> </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div><br><br>
              <div class="form-group col-md-6 mb-3">
                  <label for="jabatan" class="form-label">Jabatan</label>
                <input type="text" class="form-control" id="jabatan" name="jabatan" required>
                <?php $__errorArgs = ['jabatan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <span class="text-danger"> <?php echo e($message); ?> </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
            </div><br>

            <div class="row">
              <div class="form-group col-md-6 mb-3">
                <label for="email" class="form-label">Alamat Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <span class="text-danger"> <?php echo e($message); ?> </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div><br><br>
              <div class="form-group col-md-6 mb-3">
                <label for="instansi" class="form-label">Instansi</label>
                <input type="text" class="form-control" id="instansi" name="instansi" required>
                <?php $__errorArgs = ['instansi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <span class="text-danger"> <?php echo e($message); ?> </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
            </div><br>

            <div class="row">
              <div class="form-group col-md-6 mb-3">
                <label for="no_hp" class="form-label">Nomor Telepon/Handphone</label>
                <input type="tel" class="form-control" id="no_hp"  name="no_hp" required>
                <?php $__errorArgs = ['no_hp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <span class="text-danger"> <?php echo e($message); ?> </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
              <div class="form-group col-md-6 mb-3">
                <label for="alamat_instansi" class="form-label">Alamat Instansi</label>
                <input type="text" class="form-control" id="alamat_instansi" name="alamat_instansi" required>
                <?php $__errorArgs = ['alamat_instansi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <span class="text-danger"> <?php echo e($message); ?> </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
            </div><br>

            <div class="row">
              <div class="form-group col-md-6 mb-3">
                <label class="form-label">Ruang Lingkup Kerjasama</label><br><br>
                <?php $__currentLoopData = $ruang_lingkups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ruang_lingkup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="<?php echo e($ruang_lingkup->ruang); ?>" name="ruang_lingkup[]" value="<?php echo e($ruang_lingkup->id); ?>" >
                  <label class="form-check-label" for="<?php echo e($ruang_lingkup->ruang); ?>"><?php echo e($ruang_lingkup->ruang); ?></label><br><br>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php $__errorArgs = ['ruang_lingkup'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <span class="text-danger"> <?php echo e($message); ?> </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
              <div class="form-group col-md-6 mb-3">
                <label class="form-label">Jenis Instansi</label><br><br>
                <?php $__currentLoopData = $jenis_instansis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jenis_instansi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="<?php echo e($jenis_instansi->jenis); ?>" name="jenis_instansi[]" value="<?php echo e($jenis_instansi->id); ?>">
                  <label class="form-check-label" for="<?php echo e($jenis_instansi->jenis); ?>"><?php echo e($jenis_instansi->jenis); ?></label><br><br>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php $__errorArgs = ['jenis_instansi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <span class="text-danger"> <?php echo e($message); ?> </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
              <div class="form-group mb-3 col-md-6">
                <label class="form-label">Kerjasama dengan Unit di UNS</label><br><br>
                <?php $__currentLoopData = $unit_kerjasamas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unit_kerjasama): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="<?php echo e($unit_kerjasama->unit); ?>" name="unit_kerjasama[]" value="<?php echo e($unit_kerjasama->id); ?>" >
                  <label class="form-check-label" for="<?php echo e($unit_kerjasama->unit); ?>"><?php echo e($unit_kerjasama->unit); ?></label><br><br>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php $__errorArgs = ['unit_kerjasama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <span class="text-danger"> <?php echo e($message); ?> </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
            </div>

            <h2><span class="badge mt-3 mb-3 pl-2" style="background-color: rgba(190, 35, 121, 0.75)">PENILAIAN KEPUASAN TERHADAP LAYANAN KERJASAMA</span></h2>
            <div class="container">
              <?php $__currentLoopData = $keterangans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keterangan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="row">
                <div class="col-1">
                  <ol class="list-group list-group-numbered">
                    <h3><span class="badge" style="background-color: rgba(108, 88, 179, 0.75)"><?php echo e($loop -> index + 1); ?></span></h3>
                  </ol>
                </div>
                &nbsp;<div class="col-10 mb-4" style="align-left"><?php echo e($keterangan -> keterangan); ?>

                </div>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <br>
              <br>
            
            <div class="row">
              <?php $__currentLoopData = $penilaian_kepuasans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $penilaian_kepuasan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="form-group col-md-6 mb-3">
                <label class="form-label"><?php echo e($penilaian_kepuasan -> pertanyaan); ?></label><br><br>
                <?php $__currentLoopData = $keterangans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keterangan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="q<?php echo e($penilaian_kepuasan->id); ?>" id="<?php echo e($loop -> index + 1); ?>" value="<?php echo e($keterangan ->keterangan); ?>">
                  <label class="form-check-label" for="<?php echo e($keterangan -> id); ?>"><?php echo e($loop -> index + 1); ?></label><br><br>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php $__errorArgs = ['q<?php echo e($penilaian_kepuasan->id); ?>'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <span class="text-danger"> <?php echo e($message); ?> </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <h2><span class="badge mt-3 mb-3 pl-2" style="background-color: rgba(190, 35, 121, 0.75)">RENCANA TINDAK LANJUT DAN SARAN PERBAIKAN</span></h2>
            <?php echo csrf_field(); ?>
            <div class="row">
              <div class="form-group col-md-6 mb-3">
                <label for="saran1">Mohon kesediaan Bapak/Ibu menyebutkan hal-hal yang dibutuhkan institusi Bapak/Ibu terkait keberlanjutan kerjasama di masa yang akan datang</label><br><br>
                <textarea class="form-control" name="saran1" rows="10" required></textarea>
                <?php $__errorArgs = ['saran1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-danger"> <?php echo e($message); ?> </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
              <div class="form-group col-md-6 mb-3">
                <label for="saran2">Mohon tuliskan pendapat Bapak/Ibu secara keseluruhan tentang pelayanan UNS dalam kegiatan kerjasama</label><br><br>
                <textarea class="form-control" name="saran2" rows="10" required></textarea>
                <?php $__errorArgs = ['saran2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-danger"> <?php echo e($message); ?> </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ilham\Documents\Internship\dkpi-uns\dkpi-uns\resources\views/home/layanan/surveykepuasan.blade.php ENDPATH**/ ?>