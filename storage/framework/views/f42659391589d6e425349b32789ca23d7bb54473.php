

<?php $__env->startSection('title', 'Manage Campus'); ?>

<?php $__env->startSection('content'); ?>
<?php if($message = Session::get('success')): ?>
   
<?php endif; ?>
<div class="content-wrapper m-0">
    <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.dataScene', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        function previewImage() {
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("image-upload").files[0]);

            oFReader.onload = function (oFREvent) {
                document.getElementById("image-preview").src = oFREvent.target.result;
            };
        };
    </script>

    <script>
        (function ($, DataTable) {
            $.extend(true, DataTable.defaults, {
                pageLength : 5,
                lengthMenu: [[5, 10, 20, -1], [5, 10, 20, 'all']],
                language: {
                    url : '//cdn.datatables.net/plug-ins/1.10.10/api/fnAddDataAndDisplay.js'
                }
            });
        })(jQuery, jQuery.fn.dataTable);
    </script>

    <script>
        $(document).ready(function()  {
            var table = $('.sceneTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "<?php echo e(route('dataScene')); ?>",
                columns: [
                    {data: null,
                        searchable: false,
                        sortable: false,
                        "render": function (data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    }, 
                    {data: 'title'},
                    {data: 'image',
                        "render": function(data, type, full, meta){
                            return "<img style='height:50px;' src= 'img/uploads/" + data + "' />";
                        },
                        orderable: false,
                        searchable: false
                    },
                    {data: 'status', 
                        name: 'status',
                        orderable: false,
                        searchable: false
                    },
                    {data: 'action', 
                        name: 'action',
                        orderable: false, 
                        searchable: false
                    }
                ],
                'order': []
            });

            $('.sceneTable tbody').on('click', 'input:checkbox', function(){
                var getId = $(this).attr("id");
                if ($('input[type=checkbox]:checked').length > 1) {
                    $(this).prop('checked', false)  
                    // alert('Scene Update Main View')
                
                    Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: 'Please Uncheck The Main Page!',
                    showConfirmButton: true,
                    timer: 1500
                    })
                }else{
                    $(this).find('input[name="check"]:not(:checked)').prop('checked', true).val(0);
                    $("#status"+getId).submit();
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            var hotspotTable = $('.hotspotTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "<?php echo e(route('dataHotspot')); ?>",
                columns: [
                    {data: null,
                        searchable: false,
                        sortable: false,
                        "render": function (data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }},
                    {data: 'sourceSceneName', name: 'sc1.title'},
                    {data: 'targetSceneName', name: 'sc2.title'},
                    {data: 'type', name: 'hotspots.type'},
                    {data: 'info', name: 'hotspots.info'},
                    {data: 'action', 
                        name: 'action',
                        orderable: false, 
                        searchable: false
                    }
                ],
                'order': []
            });
        });
        
    </script>
    <!-- <script>
        $(document).on('example', "input[type='search']", function(){
    var oTable = $('.dataTable').dataTable();
    oTable.fnFilter($(this).val());
});
    </script> -->
    <script>
$(document).ready(function() {
    $('#example').dataTable();
} );
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\3D-SC\resources\views/admin/config.blade.php ENDPATH**/ ?>