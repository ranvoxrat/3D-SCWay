@extends('admin.main')

@section('title', 'Manage Account')

@section('content')
<div class="content-wrapper m-0">
    @include('sweetalert::alert')
    @include('admin.manageAdmin')
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
        $(document).ready(function()  {
            var table = $('.accountAdmin').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('adminAccountManage') }}",
                columns: [
                    {data: null,
                        searchable: false,
                        sortable: false,
                        "render": function (data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {data: 'profile',
                        name:'profile',
                        "render": function(data, type, full, meta){
                            return "<img style='height:50px;' src= 'img/faces/" + data + "' />";
                        },
                        orderable: false,
                        searchable: false
                    },
                    {data: 'fname', 
                        name: 'fname',
                        orderable: false,
                        searchable: true
                    },
                    {data: 'lname', 
                        name: 'lname',
                        orderable: false, 
                        searchable: true
                    },
                    {data: 'type', 
                        name: 'type',
                        orderable: false, 
                        searchable: false
                    }
                    ,
                    {data: 'status', 
                        name: 'status',
                        orderable: false, 
                        searchable: false
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
    $('#account').dataTable();
} );
    </script>
@endpush
