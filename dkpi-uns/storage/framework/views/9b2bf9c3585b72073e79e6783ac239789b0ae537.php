

<?php $__env->startSection('title', 'Halaman Login'); ?>

<?php $__env->startSection('container'); ?>
<br />
<br />
<div class="container3">
    <input type="checkbox" id="flip">
    <div class="cover">
        <div class="front">
            <img src="<?php echo e(asset('assets3/images/login.jpg')); ?>" alt="">
            <div class="text">
                <span class="text-1">DKPI - UNS</span>
            </div>
        </div>
        <div class="back">
            <img class="backImg" src="<?php echo e(asset('assets3/images/login.jpg')); ?>" alt="">
            <div class="text">
                <span class="text-1">DKPI - UNS</span>
            </div>
        </div>
    </div>
    <div class="forms">
        <div class="form-content">
            <div class="login-form">
                <div class="title">Masuk</div>
                <form method="POST" action="/login" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="input-boxes">
                        <div class="input-box <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                            <i class="bi bi-envelope-fill"></i>
                            <input type="email" name="email" placeholder="Masukkan alamat email yang valid" id="email"
                                autofocus required value="<?php echo e(old('email')); ?>" />
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback">
                                <?php echo e($message); ?>

                            </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="input-box">
                            <i class="bi bi-lock-fill"></i>
                            <input type="password" name="password" id="password" placeholder="Kata Sandi" required />
                        </div>
                        <?php if(session()->has('success')): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php echo e(session('success')); ?>

                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php endif; ?>
                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                        <?php if(session()->has('loginError')): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?php echo e(session('loginError')); ?>

                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php endif; ?>
                        <div class="button input-box">
                            <input type="submit" value="Kirim">
                        </div>
                      	<!-- <div class="text sign-up-text">Tidak punya akun? <label for="flip"><span>Daftar sekarang</span></label></div> -->
                    </div>
                </form>
            </div>
            <!-- <div class="signup-form">
                <div class="title">Daftar</div>
                <form action="/register" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="input-boxes">
                        <div class="input-box">
                            <i class="bi bi-person-fill"></i>
                            <input class="<?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="name"
                                placeholder="Masukkan nama" id="name" value="<?php echo e(old('name')); ?>" required>
                        </div>
                        <div class="input-box">
                            <i class="bi bi-envelope-fill"></i>
                            <input type="text" name="email" placeholder="Masukkan alamat email yang valid" id="email"
                                autofocus required value="<?php echo e(old('email')); ?>" />
                        </div>
                        <div class="input-box">
                            <i class="bi bi-lock-fill"></i>
                            <input type="password" name="password" id="password" placeholder="Kata Sandi" required />
                        </div>
                        <?php if(session()->has('success')): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php echo e(session('success')); ?>

                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php endif; ?>
                        <div class="button input-box">
                            <input type="submit" value="Kirim">
                        </div>
                        <div class="text sign-up-text">Sudah punya akun? <label for="flip">Masuk</label></div>
                    </div>
                </form>
            </div>
        </div> -->
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('login/layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ilham\Documents\Internship\dkpi-uns\resources\views/login/index.blade.php ENDPATH**/ ?>