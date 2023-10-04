<?php $__env->startSection('title', 'Dashboard'); ?>
<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              <span class="page-title-icon bg-gradient-danger text-white ">
                <i class="mdi mdi-home"></i>
              </span> Dashboard
            </h3>
            <nav aria-label="breadcrumb">
              <ul class="breadcrumb">
                <li class="breadcrumb-item active " aria-current="page">
                  <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                </li>
              </ul>
            </nav>
          </div>
          <div class="row ">
            <div class="col-md-3 stretch-card grid-margin">
              <div class="card bg-primary card-img-holder text-white">
                <div class="card-body">
                  <img src="<?php echo e(asset('img/dashboard/circle.svg')); ?>" class="card-img-absolute" alt="circle-image">
                  <h6 class="d-flex justify-content-between pt-4">Buildings <i
                      class="fa-solid fa-school mdi-24px float-right"></i></h6>
                  <p class="fs-5">08</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 stretch-card grid-margin">
              <div class="card bg-warning card-img-holder text-white ">
                <div class="card-body">
                  <img src="<?php echo e(asset('img/dashboard/circle.svg')); ?>" class="card-img-absolute" alt="circle-image">
                  <h6 class="d-flex justify-content-between pt-4">Offices<i
                      class="fa-solid fa-school mdi-24px float-right"></i></h6>
                  <p class="fs-5">15</p>
                </div>
              </div>
            </div>

            <div class="col-md-3 stretch-card grid-margin">
              <div class="card bg-danger card-img-holder text-white ">
                <div class="card-body">
                  <img src="<?php echo e(asset('img/dashboard/circle.svg')); ?>" class="card-img-absolute" alt="circle-image">
                  <h6 class="d-flex justify-content-between pt-4">Rooms<i
                      class="fa-solid fa-school mdi-24px float-right"></i></h6>
                  <p class="fs-5">37</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 stretch-card grid-margin">
              <div class="card bg-success card-img-holder text-white ">
                <div class="card-body">
                  <img src="<?php echo e(asset('img/dashboard/circle.svg')); ?>" class="card-img-absolute" alt="circle-image">
                  <h6 class="d-flex justify-content-between pt-4">Campus Ground<i
                      class="fa-solid fa-school mdi-24px float-right"></i></h6>
                  <p class="fs-5">06</p>
                </div>
              </div>
            </div>
          </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\3D-Scway\Bulsu\resources\views/admin/index.blade.php ENDPATH**/ ?>