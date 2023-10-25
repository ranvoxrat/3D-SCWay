<!-- <div class="card">
    
    <div class="card-body pt-3">
    <div class="d-flex justify-content-between align-items-center h-25">
    <h1>Upload Minimap <i class="fa-solid fa-map-location"></i></h1>
    <span class="line"></span>
    </div>
    
    </div>
</div> -->
<div class="d-flex justify-content-end">
    <!-- Add Hotspot -->
    <div class="modal fade" id="addMap">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title fs-3 fw-italic"><i class="fa-solid fa-pen-to-square fs-3"></i> Add Campus Map</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
            <form action="{{route('uploadMinimap')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                @if ($message = Session::get('success'))
                    <div class="alert-dismiss">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ $message }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span class="fa fa-times"></span>
                            </button>
                        </div>
                    </div>
                @endif
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                        <div class="alert-dismiss">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>{{ $error }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span class="fa fa-times"></span>
                                </button>
                            </div>
                        </div>
                        @endforeach
                    @endif
                    <div class="form-group">
                        <img class="card-img-top img-fluid" src="">
                        <div class="custom-file  mt-2">
                            <input type="file" class="form-control-file" name="image" accept="image/*">
                        </div>
                    </div>
                    <div class="d-flex flex-column text-black mb-1 p-2">
                        <label for="title" class="m-0 position-relative fw-normal ">Title</label>
                        <input class="border-top-0 border-start-0 border-end-0 text-center" type="text" name="title" autocomplete="off"  required>
                    </div>
                    <div class="d-flex flex-column text-black mb-1 p-2">
                        <label for="title" class="m-0 position-relative fw-normal ">Description</label>
                        <input class="border-top-0 border-start-0 border-end-0 text-center" type="text" name="description" autocomplete="off"  required>
                    </div>
                
                    <div class="modal-footer p-0 m-0">
                        <button type="button" class="btn btn-sm bg-danger" data-dismiss="modal"><i class="fa-solid fa-xmark"></i> Cancel</button>
                        <button type="submit" class="btn btn-sm bg-primary"><i class="fa-solid fa-check"></i> Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    <!-- end -->
</div>
<div class="card">
    <div class="card-body pt-3">
    <div class="d-flex justify-content-between align-items-center h-25">
    <h1>Manage Campus Map</h1>
    <span class="line"></span>
    <button class="btnAdd" data-toggle="modal" data-target="#addMap"><i class="fa-solid fa-plus"></i> Add</button>
    </div>
    <div class="table-responsive  text-black" style="width:100%">
<table id="minimap" class="table-border align-middle minimapTable" style="width:100%">
        <thead class=" text-white bg-danger ">
            <tr class="align-center">
                <th>No.</th>
                <th>Map Image</th>
                <th>Title</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
    </table>
</div>
    </div>
</div>

@foreach ($mini as $info)
<div class="modal fade" id="Profile{{$info['id']}}">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content text-black">
            <div class="modal-header bg-danger">
                <h5 class="modal-title text-white fw-normal"><i class="fa-solid fa-circle-info fs-4"></i> Map Information</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
            <div class="modal-body text-black d-flex justify-content-center flex-column align-item-center">
                <img class="card-img-top img-fluid" src="{{asset('/img/minimap/' . $info->image)}}" style="height:130px;">
                <br>
                <p>Title: {{$info->title}}</p>
                <p>description: {{$info->description}} </p>
               
            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm bg-danger" data-dismiss="modal"><i class="fa-solid fa-xmark"></i> close</button>
            </div>
        </div>
    </div>
</div>
@endforeach
