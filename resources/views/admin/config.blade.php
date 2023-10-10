@extends('admin.main')

@section('title', 'Manage Campus')

@section('content')
@if ($message = Session::get('success'))
<<<<<<< HEAD
    <div class="alert-dismiss">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ $message }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span class="fa fa-times"></span>
            </button>
        </div>
    </div>
@endif
<div class="content-wrapper">
=======
   
@endif
<div class="content-wrapper m-0">
    @include('sweetalert::alert')
>>>>>>> 9d0f165443253363713b12d7b0a724c5cd2dc8a8
    @include('admin.dataScene')
</div>
@endsection

@push('script')
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
                ajax: "{{ route('dataScene') }}",
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
<<<<<<< HEAD
                    alert('Scene Added Successfuly')
=======
                    // alert('Scene Update Main View')
                
                    Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: 'Please Uncheck The Main Page!',
                    showConfirmButton: true,
                    timer: 1500
                    })
>>>>>>> 9d0f165443253363713b12d7b0a724c5cd2dc8a8
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
                ajax: "{{ route('dataHotspot') }}",
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
@endpush