

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
              </span> Scene
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
            <!-- DADADA -->
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            
                                <form action="<?php echo e(route('addScene')); ?>" method="POST" enctype="multipart/form-data">
                                <div class="mainContent">
                                <div class="groupInput">
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
                        <!--
                                    <img src="<?php echo e(asset('img/buildings/gate.jpeg')); ?>" class="card-img-top img-fluid" id="image-preview" alt="Image Preview"/>
                        <label for="images" class="drop-container" id="dropcontainer">
                            
                                <span class="drop-title">Drop files here</span>
                                            or
                                <input type="file" id="image-upload" name="image" required onchange="previewImage()" accept="image/*" required>
                        </label> -->
                             <span class="infoAccount m-0 p-0">
                                <h1>Add New Scene</h1>
                                <p>Upload Building, Rooms, Offices and Campus Grounds.</p>
                             </span>
   
                                <div class="d-flex">
                                <div class="circle">
                                  <img class="profile-pic" src="<?php echo e(asset('img/buildings/gate.jpeg')); ?>" id="image-preview" alt="Image Preview">

                                 </div>
                                <div class="p-image">
                                    <i class="fa fa-camera upload-button"></i>
                                        <input class="file-upload" type="file" accept="image/*"id="image-upload" name="image" required onchange="previewImage()" accept="image/*" required/>
                                    </div>
                                </div>
                           </div>
                                <div class="groupInput p-4">
                                <span class="infoAccount mb-3 p-0">
                                <h1>Set Scene Configuration</h1>
                             </span>
                                   <div class="group pt-6">
                                        <i class="fa-solid fa-user-pen icon"></i>
                                        <input placeholder="Heading Scene" type="text" name="title"  class="input">
                                    </div>
                                    <div class="group">
                                        <i class="fa fa-location icon"></i>
                                        <input placeholder="Hfov" type="text"  name="hfov" class="input">
                                    </div>
                                    <div class="group">
                                        <input class="form-control form-control-lg input-rounded mb-4" type="hidden" name="type" value="equirectangular">
                                   </div>
                                    <div class="group">
                                        <i class="fa fa-location icon"></i>
                                        <input placeholder="Pitch" type="text"  name="pitch" class="input" min="-360" max="360" value="100" required>
                                    </div>
                                    <div class="group">
                                        <i class="fa fa-location icon"></i>
                                        <input placeholder="Yaw" type="text"  name="yaw" class="input" min="-360" max="360" value="0" required>
                                    </div>

                                    <div class="group">
                                        <i class="fa fa-location icon"></i>
                                        <input placeholder="Horizontal Roll" type="text"  name="horizonRoll" class="input" min="-360" max="360" value="0" required>
                                    </div>
                                    <div class="group">
                                        <i class="fa fa-location icon"></i>
                                        <input placeholder="Horizontal Pitch" type="text" name="horizonPitch" class="input" min="-360" max="360" value="0" required>
                                    </div>
                                    <div class="btnGroupSubmit">
                                    <button class="btn btn-success"><i class="fa-solid fa-check"></i> Submit</button>
                                    </div>
                                    </div>
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
          </div>
            <!-- <div class="card">
               <div class="card-body">
                <div class="row">
                <div class="col-lg-6 m-3">
                <form action="<?php echo e(route('addScene')); ?>" method="POST" enctype="multipart/form-data">
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
                        <div class="form-group">
                            <label for="image">Picture</label>
                            <img class="card-img-top img-fluid" id="image-preview" alt="Image Preview"/>
                            <div class="custom-file">
                                <input type="file" class="form-control-file" id="image-upload" name="image" required onchange="previewImage()" accept="image/*">
                            </div>
                        </div>
                        <div class="group">
                                        <i class="fa-solid fa-user icon"></i>
                                        <input placeholder="Firstname" type="text" id="fname" class="input">
                                    </div>
                        <div class="form-group">
                            <label for="title">Heading Scene</label>
                            <i class="fa fa-pen menu-icon"></i>
                            <input class="form-control form-control-sm mb-3" type="text" name="title" required>
                        </div>

                        <div class="form-group">
                            <input class="form-control form-control-sm mb-3" type="hidden" name="type" value="equirectangular">
                        </div>

                        <div class="form-group">
                            <label for="hfov">Hfov</label>
                            <input class="form-control form-control-sm mb-3" type="number" step="0.1" name="hfov" min="-360" max="360" value="100" required>
                        </div>

                        <div class="form-group">
                            <label for="yaw">Yaw</label>
                            <input class="form-control form-control-sm mb-3" type="number" step="0.1" name="yaw" min="-360" max="360" value="0" required>
                        </div>

                        <div class="form-group">
                            <label for="pitch">Pitch</label>
                            <input class="form-control form-control-sm mb-3" type="number" step="0.1" name="pitch" min="-360" max="360" value="0" required>
                        </div>



                        <div class="buttongroup d-flex justify-content-end align-item-center p-12">
                            <button type="submit" class=" buttonsub btn-primary"><i class="fa-solid fa-check"></i>Submit</button>
                        </div>
                    </form>
                </div>
                </div>
               </div>
            </div> -->
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

<?php echo $__env->make('admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\3D-Scway\Bulsu\resources\views/admin/addScene.blade.php ENDPATH**/ ?>