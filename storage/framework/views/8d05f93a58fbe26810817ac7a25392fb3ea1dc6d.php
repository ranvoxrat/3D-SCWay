
<?php $__env->startSection('title', 'Manage Scene'); ?>
<?php $__env->startSection('content'); ?>
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
<div class="content-wrapper">
<div class="page-header p-0">
            <h3 class="page-title">
              <span class="page-title-icon bg-danger text-white ">
                <i class="mdi mdi-home"></i>
              </span> Add Hotspot
            </h3>
            <nav aria-label="breadcrumb">
              <ul class="breadcrumb">
                <li class="breadcrumb-item active " aria-current="page">
                  <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-end"></i>
                </li>
              </ul>
            </nav>
            </div>
        <div class="report">
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                       <form action="<?php echo e(route('addHotspot')); ?>" method="POST" enctype="multipart/form-data" class="col-md-7 flex-wrap">
                          <div class="mainContent">
                            <div class="groupInput">
                            <span class="infoAccount mb-3 p-0">
                                <h1>Set Hotspot</h1>
                                <p>Configuration</p>
                             </span>
                            <?php echo csrf_field(); ?>

        <?php if($errors->any()): ?>
          <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="alert-dismiss">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong><?php echo e($error); ?></strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span class="fa fa-times"></span>
                    </button>
                </div>
            </div>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
                <div class="group pt-6">
                   <i class="fa-solid fa-user-pen icon"></i>
                      <input placeholder="Heading Scene" type="text" id="fname" class="input">
                </div>
<div class="group">
    <i class="fa-solid fa-location icon"></i>
    <select name="sourceScene" required>
        <option value="" disabled selected>Origin of Scene</option>
        <?php $__currentLoopData = $scene; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($item->id); ?>">
                <?php echo e($item->title); ?>

            </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>
<div class="group">
    <i class="fa-solid fa-arrow-right icon"></i>
    <select name="targetScene" required>
        <option value="" disabled selected>Target Scene</option>
        <?php $__currentLoopData = $scene; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($item->id); ?>">
                <?php echo e($item->title); ?>

            </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>
<div class="group">
    <i class="fa-solid fa-pen icon"></i>
    <select name="type" required>
        <option value="" disabled selected>Type</option>
        <option value="info">Info</option>
        <option value="scene">Scene</option>
    </select>
</div>
<div class="group">
    <i class="fa-solid fa-pen icon"></i>
    <input placeholder="YAW" type="text" class="input" required type="number" step="0.1" name="yaw" min="-360" max="360" value="0">
</div>
<div class="group">
    <i class="fa-solid fa-pen icon"></i>
    <input placeholder="PITCH" type="text" class="input" required type="number" step="0.1" name="pitch" min="-360" max="360" value="0">
</div>
<div class="group">
    <i class="fa-solid fa-pen icon"></i>
    <input placeholder="Information" type="text" class="input" type="text" name="text"required >
</div>

<div class="btnGroupSubmit">
    <button type="submit" class="btn btn-success"><i class="fa-solid fa-check"></i> Submit</button>
    </div>
                            </div>
                          </div>
                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('script'); ?>
<script>
    $(document).ready(function() {


var readURL = function(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.profile-pic').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}


$(".file-upload").on('change', function(){
    readURL(this);
});

$(".upload-button").on('click', function() {
   $(".file-upload").click();
});
});
        function previewImage() {
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("image-upload").files[0]);

            oFReader.onload = function (oFREvent) {
                document.getElementById("image-preview").src = oFREvent.target.result;
            };
        };
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\3D-Scway\Bulsu\resources\views/admin/addHotspot.blade.php ENDPATH**/ ?>