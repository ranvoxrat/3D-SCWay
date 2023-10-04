<!-- Data Scene -->
<div class="page-header p-0">
            <h3 class="page-title">
              <span class="page-title-icon bg-danger text-white ">
                <i class="mdi mdi-home"></i>
              </span> Manage Scene
            </h3>
            <nav aria-label="breadcrumb">
              <ul class="breadcrumb">
                <li class="breadcrumb-item active " aria-current="page">
                  <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-end"></i>
                </li>
              </ul>
            </nav>
</div>
<div class="card">
    <div class="card-body pt-3">
    <div class="table-responsive  text-black" style="width:100%">
<table id="example" class="display table table-borderless bg-danger sceneTable" style="width:100%">
        <thead class=" text-white">
            <tr class="align-center">
            <th>No.</th>
            <th>Building</th>
            <th>Image</th>
            <th>Main Scene</th>
            <th>Action</th>
            </tr>
        </thead>
  
        <tfoot class=" text-white"> 
            <tr class=" align-center">
                <th>No.</th>
                <th>Building</th>
                <th>Image</th>
                <th>Main Scene</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
</div>
    </div>
</div>


<!-- Modal -->

<?php $__currentLoopData = $scene; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<!-- Detail Modal -->
<div class="modal fade" id="detailScene<?php echo e($item['id']); ?>">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title">SCENE INFORMATION</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body text-black d-flex align-item-center">
                <img class="card-img-top img-fluid" src="<?php echo e(asset('/img/uploads/' . $item->image)); ?>">
                <p>Title: <?php echo e($item->title); ?></p>
                <p>Hfov: <?php echo e($item->hfov); ?> </p>
                <p>Yaw: <?php echo e($item->yaw); ?></p>
                <p>Pitch: <?php echo e($item->pitch); ?></p>
                <p>Horizon Roll: <?php echo e($item->horizonRoll); ?></p>
                <p>Horizon Pitch <?php echo e($item->horizonPitch); ?></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-danger btn-sm" data-dismiss="modal"><i class="fa-solid fa-xmark"></i> Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editModal<?php echo e($item['id']); ?>">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ubah <?php echo e($item->title); ?></h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="<?php echo e(route('editScene', ['id' => $item->id])); ?>" method="POST" enctype="multipart/form-data"> 
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>

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
                        <label for="title" class="d-flex justify-content-left">Title Scene</label>
                        <input class="form-control form-control-lg input-rounded mb-4" type="text" name="title" required value="<?php echo e($item->title); ?>">
                    </div>

                    <div class="form-group">
                        <input class="form-control form-control-lg input-rounded mb-4" type="hidden" name="type" value="<?php echo e($item->type); ?>">
                    </div>

                    <div class="form-group">
                        <label for="hfov" class=" d-flex justify-content-left">Hfov</label>
                        <input class="form-control form-control-lg input-rounded mb-4" type="number" step="0.1" name="hfov" min="-360" max="360" value="<?php echo e($item->hfov); ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="yaw" class=" d-flex justify-content-left">Yaw</label>
                        <input class="form-control form-control-lg input-rounded mb-4" type="number" step="0.1" name="yaw" min="-360" max="360" value="<?php echo e($item->yaw); ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="pitch" class=" d-flex justify-content-left">Pitch</label>
                        <input class="form-control form-control-lg input-rounded mb-4" type="number" step="0.1" name="pitch" min="-360" max="360" value="<?php echo e($item->pitch); ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="image" class=" d-flex justify-content-left">Image</label>
                        <img class="card-img-top img-fluid" src="<?php echo e(asset('/img/uploads/' . $item->image)); ?>">
                        <div class="custom-file">
                            <input type="file" class="form-control-file" name="image" accept="image/*">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete Modal -->
<div id="deleteModal<?php echo e($item['id']); ?>" class="modal fade">
    <div class="modal-dialog modal-dialog-centered modal-confirm">
        <div class="modal-content">
            <div class="modal-header flex-column">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div class="icon-box">
                    <i class="fa fa-times-circle"></i>
                </div>	
            </div>
            <div class="modal-body">
                <p class="text-center">Apakah Anda Yakin Ingin Menghapus Data Ini? </p>
                <form method="POST" action="<?php echo e(route('delScene', ['id' => $item->id])); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\xampp\htdocs\3D-Scway\Bulsu\resources\views/admin/dataScene.blade.php ENDPATH**/ ?>