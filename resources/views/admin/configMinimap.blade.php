@extends('admin.main')

@section('title', 'Manage Minimap')

@section('content')
<div class="content-wrapper m-0">
    @include('sweetalert::alert')
    @include('admin.uploadMinimap')
</div>
@endsection
@push('script')
    <script>
        (function ($, DataTable) {
            $.extend(true, DataTable.defaults, {
                pageLength : 5,
                lengthMenu: [[5, 10, 20, -1], [6, 10, 20, 'all']],
                language: {
                    url : '//cdn.datatables.net/plug-ins/1.10.10/api/fnAddDataAndDisplay.js'
                }
            });
        })(jQuery, jQuery.fn.dataTable);
    </script>

    <script>
        $(document).ready(function() {
            var table = $('.minimapTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('showMinimap') }}",
                columns: [
                    {data: null,
                        searchable: false,
                        sortable: false,
                        "render": function (data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {data: 'image',
                        name:'image',
                        "render": function(data, type, full, meta){
                            return "<img style='height:50px;' src= 'img/minimap/" + data + "' />";
                        },
                        orderable: false,
                        searchable: false
                    },
                    {data: 'title', 
                        name: 'title',
                        orderable: false,
                        searchable: true
                    },
                    {data: 'description', 
                        name: 'description',
                        orderable: false, 
                        searchable: true
                    }
                    ,
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
    <script>
$(document).ready(function() {
    $('#minimap').dataTable();
} );
    </script>
@endpush
