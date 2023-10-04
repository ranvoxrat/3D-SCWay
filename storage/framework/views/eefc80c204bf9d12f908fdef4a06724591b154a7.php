<div class="page-header p-0">
            <h3 class="page-title">
              <span class="page-title-icon bg-danger text-white ">
                <i class="mdi mdi-home"></i>
              </span> Manage Hotspot
            </h3>
            <nav aria-label="breadcrumb">
              <ul class="breadcrumb">
                <li class="breadcrumb-item active " aria-current="page">
                  <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-end"></i>
                </li>
              </ul>
            </nav>
</div>
<div class="d-flex justify-content-end">
    <!-- Add Hotspot -->
    <div class="modal fade" id="addHotspot">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Hotspot</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                </div>

                <div class="modal-body">
                    <form action="<?php echo e(route('addHotspot')); ?>" method="POST" enctype="multipart/form-data">
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
                            <label for="sourceScene">Asal Scene</label>
                            <select class="form-control form-control-lg input-rounded mb-4" name="sourceScene" required>
                                <option value="" disabled selected>Pilih Salah Satu </option>
                                <?php $__currentLoopData = $scene; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->id); ?>">
                                        <?php echo e($item->title); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="scene">Target Scene</label>
                            <select class="form-control form-control-lg input-rounded mb-4" name="targetScene" required>
                                <option value="" disabled selected>Pilih Salah Satu </option>
                                <?php $__currentLoopData = $scene; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->id); ?>">
                                        <?php echo e($item->title); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="type">Tipe</label>
                            <select class="form-control form-control-lg input-rounded mb-4" name="type" required>
                                <option value="" disabled selected>Choose One </option>
                                <option value="info">Info</option>
                                <option value="scene">Penghubung</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="yaw">Yaw</label>
                            <input class="form-control form-control-lg input-rounded mb-4" required type="number" step="0.1" name="yaw" min="-360" max="360" value="0">
                        </div>

                        <div class="form-group">
                            <label for="pitch">Pitch</label>
                            <input class="form-control form-control-lg input-rounded mb-4" required type="number" step="0.1" name="pitch" min="-360" max="360" value="0">
                        </div>

                        <div class="form-group">
                            <label for="text">Informasi</label>
                            <textarea class="form-control form-control-lg input-rounded mb-4" required type="text" name="text"></textarea>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="table-responsive" style="width:100%;">
    <table class="table table-hover progress-table text-center hotspotTable" style="width:100%">
        <thead class="text-uppercase">
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Asal Scene</th>
                <th scope="col">Target Scene</th>
                <th scope="col">Tipe</th>
                <th scope="col">Info</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
    </table>
</div> -->
<div class="card">
   <div class="card-body p-3">
   <div class="table-responsive text-black" style="width:100%">
   <caption>List of Hotspot</caption>
<table id="example" class="table table-borderless align-middle hotspotTable" style="width:100%">

<thead class="bg-danger text-white">
            <tr class="align-center">
            <th>No.</th>
            <th>Origin of Scene</th>
            <th>Target Scene</th>
            <th>Type</th>
            <th>Main Scene</th>
            <th>Action</th>
            </tr>
        </thead>
        <tfoot class="bg-danger text-white"> 
            <tr class=" align-center">
            <th>No.</th>
            <th>Origin of Scene</th>
            <th>Target Scene</th>
            <th>Type</th>
            <th>Main Scene</th>
            <th>Action</th>
            </tr>
        </tfoot>
    </table>
</div>

   </div>
</div>


<!-- Modal -->
<?php $__currentLoopData = $hotspots; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hotspot): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<!-- Detail Modal -->
<div class="modal fade" id="detailHotspot<?php echo e($hotspot['id']); ?>">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content text-black">
            <div class="modal-header">
                <h5 class="modal-title justify-content-">Info Hotspot</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">

                <p class="d-flex justify-content-left">
                    <b>Tipe: </b> <?php echo e($hotspot->type); ?> 
                </p><br>

                <p class="d-flex justify-content-left"> 
                    <b> Yaw: </b> <?php echo e($hotspot->yaw); ?>

                </p><br>

                <p class="d-flex justify-content-left"> 
                    <b> Pitch: </b> <?php echo e($hotspot->pitch); ?> 
                </p><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">close</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editHotspot<?php echo e($hotspot['id']); ?>">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-black">Change Hotspot </h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo e(route('editHotspot', ['id' => $hotspot->id])); ?>"> 
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
                        <label for="sourceScene" class="d-flex justify-content-left">Asal Scene</label>
                        <select class="form-control form-control-lg input-rounded mb-4" name="sourceScene" required>
                            <option value="" disabled>Pilih Salah Satu </option>
                            <?php $__currentLoopData = $scene; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $scenes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($hotspot->sourceScene == $scenes->id): ?>
                                    <option value="<?php echo e($hotspot->sourceScene); ?>" selected> <?php echo e($scenes->title); ?></option>
                                <?php else: ?>
                                    <option value="<?php echo e($scenes->id); ?>"> <?php echo e($scenes->title); ?></option>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="scene" class="d-flex justify-content-left">Target Scene</label>
                        <select class="form-control form-control-lg input-rounded mb-4" name="targetScene" required>
                            <option value="" disabled>Pilih Salah Satu </option>
                            <?php $__currentLoopData = $scene; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $scenes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($hotspot->targetScene == $scenes->id): ?>
                                    <option value="<?php echo e($hotspot->targetScene); ?>" selected> <?php echo e($scenes->title); ?></option>
                                <?php else: ?>
                                    <option value="<?php echo e($scenes->id); ?>"> <?php echo e($scenes->title); ?></option>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="type" class="d-flex justify-content-left">Tipe</label>
                        <select class="form-control form-control-lg input-rounded mb-4" name="type" required>
                            <option value="" disabled>Pilih Salah Satu </option>
                            <option value="info" <?php if($hotspot->type == "info"): ?> <?php echo e('selected'); ?> <?php endif; ?>>Info</option>
                            <option value="scene" <?php if($hotspot->type == "scene"): ?> <?php echo e('selected'); ?> <?php endif; ?>>Scene</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="yaw" class="d-flex justify-content-left">Yaw</label>
                        <input class="form-control form-control-lg input-rounded mb-4" required type="number" step="0.1" name="yaw" min="-360" max="360" value="<?php echo e($hotspot->yaw); ?>">
                    </div>

                    <div class="form-group">
                        <label for="pitch" class="d-flex justify-content-left">Pitch</label>
                        <input class="form-control form-control-lg input-rounded mb-4" required type="number" step="0.1" name="pitch" min="-360" max="360" value="<?php echo e($hotspot->pitch); ?>">
                    </div>

                    <div class="form-group">
                        <label for="text" class="d-flex justify-content-left">Text</label>
                        <textarea class="form-control form-control-lg input-rounded mb-4" name="text" required > <?php echo e($hotspot->info); ?> </textarea>
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
<div id="deleteHotspot<?php echo e($hotspot['id']); ?>" class="modal fade">
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
                <form method="POST" action="<?php echo e(route('delHotspot', ['id' => $hotspot->id])); ?>">
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
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\xampp\htdocs\3D-Scway\Bulsu\resources\views/admin/dataHotspot.blade.php ENDPATH**/ ?>