

<?php $__env->startSection('title', 'Login Form'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
        <div class="cover">
           
            <div class="front">
                
                <div class="text">                 
                </div>
                <div class="text2">                 
                </div>
                <div class="infoText">
 <!-- <span class="bulsuLogo"></span> -->
                    <!-- <img src="<?php echo e(asset('img/bulsu-logo.png')); ?>" alt="" id="bulsuLogo"> -->
                    <!-- <img src="../assets/images/background2.png" alt="rightLogo" id="rigthLogo" > -->
                    
                        <h1>SC-Way</h1>
                        <h4>A <span>3D</span> Campus Guide</h4>
                        <h5>In BULSU-SC</h5>
                    
                  
                    <!-- <img src="<?php echo e(asset('')); ?>" width="70%" alt=""> -->
                    <!-- <img src="images/logo/bag.png" alt="">  -->
                    

                </div>
            </div>
        </div>
        <div class="forms">
            <div class="form-content">
                <div class="login-form">
                    <div class="title">
                        <h1>Login<i class="fa-solid fa-arrow-right"></i></h1>
                   </div>
                   <p class="t1">Login your account</p>
                    <form action=" " method="POST">
                    <?php echo csrf_field(); ?>
                
                        <div class="input-boxes">
                            <div class="input-box">
                                <i class="fa-sharp fa-solid fa-lock"></i>
                                <input type="text" placeholder="Enter Username" name="username" id="username" value="<?php echo e(old('username')); ?>"required
                                    autocomplete="off">
                            </div>
                            <div class="input-box">
                                <i class="fa-solid fa-key"></i>
                                <input type="password" placeholder="Enter Password" name="password" id="password"
                                    required autocomplete="off">
                            </div>
                            <button id="form_submit" type="submit">Login
                                <div class="star-1">
                                    <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53"
                                        style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                        version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                        <defs></defs>
                                        <g id="Layer_x0020_1">
                                            <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                                            <path
                                                d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
                                                class="fil0"></path>
                                        </g>
                                    </svg>
                                </div>
                                <div class="star-2">
                                    <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53"
                                        style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                        version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                        <defs></defs>
                                        <g id="Layer_x0020_1">
                                            <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                                            <path
                                                d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
                                                class="fil0"></path>
                                        </g>
                                    </svg>
                                </div>
                                <div class="star-3">
                                    <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53"
                                        style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                        version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                        <defs></defs>
                                        <g id="Layer_x0020_1">
                                            <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                                            <path
                                                d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
                                                class="fil0"></path>
                                        </g>
                                    </svg>
                                </div>
                                <div class="star-4">
                                    <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53"
                                        style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                        version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                        <defs></defs>
                                        <g id="Layer_x0020_1">
                                            <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                                            <path
                                                d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
                                                class="fil0"></path>
                                        </g>
                                    </svg>
                                </div>
                                <div class="star-5">
                                    <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53"
                                        style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                        version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                        <defs></defs>
                                        <g id="Layer_x0020_1">
                                            <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                                            <path
                                                d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
                                                class="fil0"></path>
                                        </g>
                                    </svg>
                                </div>
                                <div class="star-6">
                                    <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53"
                                        style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                        version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                        <defs></defs>
                                        <g id="Layer_x0020_1">
                                            <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                                            <path
                                                d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
                                                class="fil0"></path>
                                        </g>
                                    </svg>
                                </div>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- <div class="login-area login-bg">
    <div class="container">
        <div class="login-box ptb--100">
            <form method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo csrf_field(); ?>
                <div class="login-form-head">
                    <h4>Login</h4>
                    <p>Halo, Login untuk Kelola Virtual Tour Anda</p>
                </div>

                <div class="login-form-body">

                <?php if($message = Session::get('success')): ?>
                    <div class="alert-dismiss">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong><?php echo e($message); ?></strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span class="fa fa-times"></span>
                            </button>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if($errors->any()): ?>
                    <div class="alert-dismiss">
                        <div class="alert alert-danger" role="alert">
                            <strong><?php echo e($errors->first()); ?></strong>
                        </div>
                    </div>
                <?php endif; ?>
                
                    <div class="form-gp">
                        <label for="username">Username</label>
                        <input id="username" type="username" 
                            name="username" value="<?php echo e(old('username')); ?>" required>
                        <i class="ti-user"></i>
                        <div class="text-danger"></div>
                    </div>
                    <div class="form-gp">
                        <label for="password">Password</label>
                        <input id="password" type="password" name="password" required>
                        <i class="ti-lock"></i>
                        <div class="text-danger"></div>
                    </div>
                    <div class="submit-btn-area">
                        <button id="form_submit" type="submit"><?php echo e(__('Masuk')); ?> <i class="ti-arrow-right"></i></button>
                    </div>
                    <div class="form-footer text-center mt-5">
                        <p class="text-muted">Tidak Punya Akun? <a href="<?php echo e(route('register')); ?>">Registrasi</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div> -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('auth.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\3Dscway\BulsuSc\resources\views/auth/signin.blade.php ENDPATH**/ ?>