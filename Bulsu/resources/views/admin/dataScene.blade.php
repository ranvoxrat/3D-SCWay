<!-- Data Scene -->
<div class="page-header p-0">
            <h1 class="page-title">
              <span class="page-title-icon bg-danger text-white ">
                <i class="mdi mdi-home"></i>
              </span> Manage Scene
            </h1>
            <nav aria-label="breadcrumb">
              <ul class="breadcrumb">
                <li class="breadcrumb-item active " aria-current="page">
                  <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-end"></i>
                </li>
              </ul>
            </nav>
</div>
<div class="d-flex justify-content-end">
<div class="modal fade" id="addHotspot">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title fs-3 fw-italic"><i class="fa-solid fa-pen-to-square fs-3"></i> Scene Configuration</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="{{route('addScene')}}" method="POST" enctype="multipart/form-data">
                    @csrf
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
                        <label for="image" class=" d-flex justify-content-left">Image</label>
                        <img class="card-img-top img-fluid" src="">
                        <div class="custom-file  mt-2">
                            <input type="file" class="form-control-file" name="image" accept="image/*">
                        </div>
                    </div>
                    <div class="d-flex flex-column text-black mb-1 p-2">
                        <label for="title" class="m-0 position-relative fw-normal ">Title Scene</label>
                        <input class="border-top-0 border-start-0 border-end-0 text-center" type="text" name="title"autocomplete="off"  required>
                    </div>
                    <div class="d-flex flex-column text-black p-2">
                        <label for="hfov" class="m-0 position-relative fw-normal "> Hfov</label>
                        <input class="border-top-0 border-start-0 border-end-0 text-center" type="number" step="0.1" name="hfov" min="-360" max="360" value="0"autocomplete="off"  required>
                    </div>
                    <div class="d-flex flex-column text-black">
                        <input class=" mb-4" type="hidden" name="type" value="equirectangular">
                    </div>
                    <div class="d-flex flex-column text-black p-2">
                        <label for="pitch" class="m-0 position-relative fw-normal ">Pitch</label>
                        <input class="border-top-0 border-start-0 border-end-0 text-center" type="number" step="0.1" name="pitch" min="-360" max="360" value="0"autocomplete="off"  required>
                    </div>
                    <div class="d-flex flex-column text-black p-2">
                        <label for="yaw" class="m-0 position-relative fw-normal "> Yaw</label>
                        <input class="border-top-0 border-start-0 border-end-0 text-center" type="number" step="0.1" name="yaw" min="-360" max="360" value="0"autocomplete="off"  required>
                    </div>                  
                    <div class="d-flex flex-column text-black p-2">
                        <label for="pitch" class="m-0 position-relative fw-normal ">Horizon Roll</label>
                        <input class="border-top-0 border-start-0 border-end-0 text-center" type="number" step="0.1" name="horizonRoll" min="-360" max="360"  value="0"autocomplete="off" required>
                    </div>
                    <div class="d-flex flex-column text-black p-2">
                        <label for="pitch" class="m-0 position-relative fw-normal ">Horizon Pitch:</label>
                        <input class="border-top-0 border-start-0 border-end-0 text-center" type="number" step="0.1" name="horizonPitch" min="-360" max="360" value="0"autocomplete="off"  required>
                    </div>

                    <div class="modal-footer p-0 m-0">
                        <button type="button" class="btn btn-md bg-danger" data-dismiss="modal"><i class="fa-solid fa-xmark"></i> Cancel</button>
                        <button type="submit" class="btn btn-md bg-primary"><i class="fa-solid fa-check"></i>Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<div class="card">
    <div class="card-body pt-3">
    <button class="btn btn-sm bg-success d-block" data-toggle="modal" data-target="#addHotspot"><i class="fa-solid fa-plus"></i></button>
    <div class="table-responsive  text-black" style="width:100%">
    <h4>List of Scene</h4>
<table id="example" class="table table-border align-middle sceneTable" style="width:100%">
        <thead class=" text-white bg-danger ">
            <tr class="align-center">
            <th>No.</th>
            <th>Building</th>
            <th>Image</th>
            <th>Main Scene</th>
            <th>Action</th>
            </tr>
        </thead>

        <tfoot class=" text-white bg-danger ">
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

@foreach($scene as $item)
<!-- Detail Modal -->
<div class="modal fade" id="detailScene{{$item['id']}}">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title"><i class="fa-solid fa-pen-to-square fs-2"></i> SCENE INFORMATION</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body text-black d-flex justify-content-center flex-column align-item-center">
                <img class="card-img-top img-fluid" src="{{asset('/img/uploads/' . $item->image)}}">
                <p>Title: {{$item->title}}</p>
                <p>Hfov: {{$item->hfov}} </p>
                <p>Yaw: {{$item->yaw}}</p>
                <p>Pitch: {{$item->pitch}}</p>
                <p>Horizon Roll: {{$item->horizonRoll}}</p>
                <p>Horizon Pitch {{$item->horizonPitch}}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-danger btn-sm" data-dismiss="modal"><i class="fa-solid fa-xmark"></i> Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editModal{{$item['id']}}">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title fs-3 fw-italic"><i class="fa-solid fa-pen-to-square fs-3"></i> Scene Configuration</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('editScene', ['id' => $item->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    @if ($errors->any())
                      
                    @endif
                    <div class="form-group">
                        <label for="image" class=" d-flex justify-content-left">Image</label>
                        <img class="card-img-top img-fluid" src="{{asset('/img/uploads/' . $item->image)}}">
                        <div class="custom-file  mt-2">
                            <input type="file" class="form-control-file" name="image" accept="image/*">
                        </div>
                    </div>
                    <!-- <div class="d-flex">
                                <div class="circle">
                                  <img class="profile-pic" src="{{asset('img/uploads/' . $item->image)}}" id="image-preview" alt="Image Preview">

                                 </div>
                                <div class="p-image">
                                    <i class="fa fa-camera upload-button"></i>
                                        <input class="file-upload" type="file" id="image-upload" name="image" required onchange="previewImage()" accept="image/*" required/>
                                    </div>
                                </div> -->
                    <div class="d-flex flex-column text-black mb-1 p-2">
                        <label for="title" class="m-0 position-relative fw-normal ">Title Scene</label>
                        <input class="border-top-0 border-start-0 border-end-0 text-center" type="text" name="title" required value="{{$item->title}}">
                    </div>
                    <div class="d-flex flex-column text-black p-2">
                        <label for="hfov" class="m-0 position-relative fw-normal "> Hfov</label>
                        <input class="border-top-0 border-start-0 border-end-0 text-center" type="number" step="0.1" name="hfov" min="-360" max="360" value="{{$item->hfov}}" required>
                    </div>
                    <div class="d-flex flex-column text-black">
                        <input class=" mb-4" type="hidden" name="type" value="{{$item->type}}">
                    </div>
                    <div class="d-flex flex-column text-black p-2">
                        <label for="pitch" class="m-0 position-relative fw-normal ">Pitch</label>
                        <input class="border-top-0 border-start-0 border-end-0 text-center" type="number" step="0.1" name="pitch" min="-360" max="360" value="{{$item->pitch}}" required>
                    </div>
                    <div class="d-flex flex-column text-black p-2">
                        <label for="yaw" class="m-0 position-relative fw-normal "> Yaw</label>
                        <input class="border-top-0 border-start-0 border-end-0 text-center" type="number" step="0.1" name="yaw" min="-360" max="360" value="{{$item->yaw}}" required>
                    </div>                  
                    <div class="d-flex flex-column text-black p-2">
                        <label for="pitch" class="m-0 position-relative fw-normal ">Horizon Roll</label>
                        <input class="border-top-0 border-start-0 border-end-0 text-center" type="number" step="0.1" name="horizonRoll" min="-360" max="360" value="{{$item->horizonRoll}}" required>
                    </div>
                    <div class="d-flex flex-column text-black p-2">
                        <label for="pitch" class="m-0 position-relative fw-normal ">Horizon Pitch:</label>
                        <input class="border-top-0 border-start-0 border-end-0 text-center" type="number" step="0.1" name="horizonPitch" min="-360" max="360" value="{{$item->horizonPitch}}" required>
                    </div>

                    <div class="modal-footer p-0 m-0">
                        <button type="button" class="btn btn-md bg-danger" data-dismiss="modal"><i class="fa-solid fa-xmark"></i> Cancel</button>
                        <button type="submit" class="btn btn-md bg-primary"><i class="fa-solid fa-check"></i> Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete Modal -->
<div id="deleteModal{{$item['id']}}" class="modal fade">
    <div class="modal-dialog modal-dialog-centered modal-confirm">
        <div class="modal-content">
            <div class="modal-header flex-column">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div class="icon-box">
                    <i class="fa fa-times-circle"></i>
                </div>
            </div>
            <div class="modal-body">
                <p class="text-center text-black fs-5">Are you sure you want to delete this Scene? </p>
                <form method="POST" action="{{ route('delScene', ['id' => $item->id]) }}">
                    @csrf
                    @method('DELETE')
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-sm bg-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-sm bg-danger">Delete</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endforeach