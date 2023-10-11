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
    <div class="modal fade" id="addScene">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title fs-3 fw-italic"><i class="fa-solid fa-pen-to-square fs-3"></i> Add Hotspot</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('addHotspot') }}" method="POST" enctype="multipart/form-data">
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
                    <div class="d-flex flex-column text-black mb-1 p-2">
                        <label for="sourceScene" class="m-0 position-relative fw-normal">Origin of Scene</label>
                        <select class="border-top-0 border-start-0 border-end-0 text-center" name="sourceScene" required>
                            <option value=""selected disabled>Choose One </option>
                            @foreach ($scene as $item)
                                <option value="{{$item->id}}">
                                    {{$item->title}}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="d-flex flex-column text-black mb-1 p-2">
                        <label for="scene" class="m-0 position-relative fw-normal">Target Scene</label>
                        <select class="border-top-0 border-start-0 border-end-0 text-center" name="targetScene" required>
                            <option value=""selected disabled>Choose One</option>
                            @foreach ($scene as $item)
                                <option value="{{$item->id}}">
                                    {{$item->title}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="d-flex flex-column text-black mb-1 p-2">
                        <label for="type" class="m-0 position-relative fw-normal">Type</label>
                        <select class="border-top-0 border-start-0 border-end-0 text-center" name="type" required>
                            <option value=""selected disabled>Chooce one</option>
                            <option value="info">Info</option>
                            <option value="scene">Scene</option>
                        </select>
                    </div>
                    
                    <div class="d-flex flex-column text-black mb-1 p-2">
                        <label for="title" class="m-0 position-relative fw-normal">Yaw</label>
                        <input class="border-top-0 border-start-0 border-end-0 text-center" type="number" step="0.1" name="yaw" min="-360" max="360" value="0" required>
                    </div>

                    <div class="d-flex flex-column text-black p-2">
                        <label for="hfov" class="m-0 position-relative fw-normal">Pitch</label>
                        <input class="border-top-0 border-start-0 border-end-0 text-center" type="number" step="0.1" name="pitch" min="-360" max="360" value="0"  required>
                    </div>
                    <div class="d-flex flex-column text-black">
                        <input class=" mb-4" type="hidden" name="type" value="{{$item->type}}">
                    </div>
                    <div class="d-flex flex-column text-black p-2">
                        <label for="pitch" class="m-0 position-relative fw-normal">Text</label>
                        <textarea class="border-top-0 border-start-0 border-end-0 text-center" name="text" required > </textarea>
                    </div>
                    

                   
                    <div class="modal-footer p-0 m-0">
                        <button type="button" class="btn btn-sm bg-danger" data-dismiss="modal"><i class="fa-solid fa-xmark"></i> Cancel</button>
                        <button type="submit" class="btn btn-sm bg-primary"><i class="fa-solid fa-check"></i>Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    <!-- end -->
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
    <button class="btn btn-sm bg-success d-block" data-toggle="modal" data-target="#addScene"><i class="fa-solid fa-plus"></i></button>
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
@foreach($hotspots as $hotspot)
<!-- Detail Modal -->
<div class="modal fade" id="detailHotspot{{$hotspot['id']}}">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content text-black">
            <div class="modal-header bg-danger">
                <h5 class="modal-title text-white fw-normal"><i class="fa-solid fa-circle-info fs-4"></i> Hotspot Information</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">

                <p class="d-flex justify-content-left">
                    <b>Type: </b> {{ $hotspot->type}} 
                </p><br>

                <p class="d-flex justify-content-left"> 
                    <b> Yaw: </b> {{$hotspot->yaw}}
                </p><br>

                <p class="d-flex justify-content-left"> 
                    <b> Pitch: </b> {{$hotspot->pitch}} 
                </p><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm bg-danger" data-dismiss="modal"><i class="fa-solid fa-xmark"></i> close</button>
            </div>
        </div>
    </div>
</div>
<!-- Add hotspot -->


<!-- End Add hotspot -->
<!-- Edit Modal -->
<!-- <div class="modal fade" id="editHotspot{{$hotspot['id']}}">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger ">
                <h5 class="modal-title text-black text-white fst-normal"><i class="fa-regular fa-pen-to-square"></i> Change Hotspot Configuration</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('editHotspot', ['id' => $hotspot->id]) }}"> 
                    @csrf
                    @method('PUT')

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
                        <label for="sourceScene" class="d-flex justify-content-left position-absolute position-absolute">Origin of Scene</label>
                        <select class="form-control form-control-lg border-top-0 border-left-0 border-right-0 mb-2" name="sourceScene" required>
                            <option value="" disabled>Choose One </option>
                            @foreach ($scene as $scenes)
                                @if ($hotspot->sourceScene == $scenes->id)
                                    <option value="{{$hotspot->sourceScene}}" selected> {{$scenes->title}}</option>
                                @else
                                    <option value="{{$scenes->id}}"> {{$scenes->title}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="scene" class="d-flex justify-content-left position-absolute">Target Scene</label>
                        <select class="form-control form-control-lg border-top-0 border-left-0 border-right-0 mb-2" name="targetScene" required>
                            <option value="" disabled>Choose One</option>
                            @foreach ($scene as $scenes)
                                @if ($hotspot->targetScene == $scenes->id)
                                    <option value="{{$hotspot->targetScene}}" selected> {{$scenes->title}}</option>
                                @else
                                    <option value="{{$scenes->id}}"> {{$scenes->title}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="type" class="d-flex justify-content-left position-absolute">Type</label>
                        <select class="form-control form-control-lg border-top-0 border-left-0 border-right-0  mb-2" name="type" required>
                            <option value="" disabled>Pilih Salah Satu </option>
                            <option value="info" @if ($hotspot->type == "info") {{ 'selected' }} @endif>Info</option>
                            <option value="scene" @if ($hotspot->type == "scene") {{ 'selected' }} @endif>Scene</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="yaw" class="d-flex justify-content-left position-absolute">Yaw</label>
                        <input class="form-control form-control-lg border-top-0 border-left-0 border-right-0 mb-2" required type="number" step="0.1" name="yaw" min="-360" max="360" value="{{$hotspot->yaw}}">
                    </div>

                    <div class="form-group">
                        <label for="pitch" class="d-flex justify-content-left position-absolute">Pitch</label>
                        <input class="form-control form-control-lg border-top-0 border-left-0 border-right-0 mb-2" required type="number" step="0.1" name="pitch" min="-360" max="360" value="{{$hotspot->pitch}}">
                    </div>

                    <div class="form-group">
                        <label for="text" class="d-flex justify-content-left position-absolute">Text</label>
                        <textarea class="form-control form-control-lg border-top-0 border-left-0 border-right-0 mb-2" name="text" required > {{$hotspot->info}} </textarea>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm bg-danger" data-dismiss="modal"><i class="fa-solid fa-xmark"></i> Cancel</button>
                        <button type="submit" class="btn btn-sm bg-success"><i class="fa-solid fa-check"></i> Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> -->
<!-- Edit Modal -->
<div class="modal fade" id="editHotspot{{$hotspot['id']}}">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title fs-3 fw-italic"><i class="fa-solid fa-pen-to-square fs-3"></i> Scene Configuration</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('editHotspot', ['id' => $hotspot->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

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
                    <div class="d-flex flex-column text-black mb-1 p-2">
                        <label for="sourceScene" class="m-0 position-relative fw-normal">Origin of Scene</label>
                        <select class="border-top-0 border-start-0 border-end-0 text-center" name="sourceScene" required>
                            <option value="" disabled>Choose One </option>
                            @foreach ($scene as $scenes)
                                @if ($hotspot->sourceScene == $scenes->id)
                                    <option value="{{$hotspot->sourceScene}}" selected> {{$scenes->title}}</option>
                                @else
                                    <option value="{{$scenes->id}}"> {{$scenes->title}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="d-flex flex-column text-black mb-1 p-2">
                        <label for="scene" class="m-0 position-relative fw-normal">Target Scene</label>
                        <select class="border-top-0 border-start-0 border-end-0 text-center" name="targetScene" required>
                            <option value="" disabled>Choose One</option>
                            @foreach ($scene as $scenes)
                                @if ($hotspot->targetScene == $scenes->id)
                                    <option value="{{$hotspot->targetScene}}" selected> {{$scenes->title}}</option>
                                @else
                                    <option value="{{$scenes->id}}"> {{$scenes->title}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="d-flex flex-column text-black mb-1 p-2">
                        <label for="type" class="m-0 position-relative fw-normal">Type</label>
                        <select class="border-top-0 border-start-0 border-end-0 text-center" name="type" required>
                            <option value="" disabled>Choose</option>
                            <option value="info" @if ($hotspot->type) {{'selected'}} @endif >Info</option>
                            <option value="scene" @if ($hotspot->type) {{'selected'}} @endif >Scene</option>
                        </select>
                    </div>
                    
                    <div class="d-flex flex-column text-black mb-1 p-2">
                        <label for="title" class="m-0 position-relative fw-normal">Yaw</label>
                        <input class="border-top-0 border-start-0 border-end-0 text-center" type="number" step="0.1" name="yaw" min="-360" max="360" value="{{$hotspot->yaw}}" required>
                    </div>

                    <div class="d-flex flex-column text-black p-2">
                        <label for="hfov" class="m-0 position-relative fw-normal">Pitch</label>
                        <input class="border-top-0 border-start-0 border-end-0 text-center" type="number" step="0.1" name="pitch" min="-360" max="360" value="{{$hotspot->pitch}}" required>
                    </div>
                   
                    <div class="d-flex flex-column text-black p-2">
                        <label for="pitch" class="m-0 position-relative fw-normal">Text</label>
                        <textarea class="border-top-0 border-start-0 border-end-0 text-center" name="text" required > {{$hotspot->info}} </textarea>
                    </div>
                    

                   
                    <div class="modal-footer p-0 m-0">
                        <button type="button" class="btn btn-sm bg-danger" data-dismiss="modal"><i class="fa-solid fa-xmark"></i> Cancel</button>
                        <button type="submit" class="btn btn-sm bg-primary"><i class="fa-solid fa-check"></i> Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete Modal -->
<div id="deleteHotspot{{$hotspot['id']}}" class="modal fade">
    <div class="modal-dialog modal-dialog-centered modal-confirm">
        <div class="modal-content">
            <div class="modal-header flex-column bg-danger">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
             <h4 class="fs-4 fw-bold">Warning <i class="fa-solid fa-exclamation fs-3"></i></h4>
            </div>
            <div class="modal-body">
                <p class="text-center text-black">Are you sure you want to delete this data?</p>
                <form method="POST" action="{{ route('delHotspot', ['id' => $hotspot->id]) }}">
                    @csrf
                    @method('DELETE')
                    
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-sm bg-danger " data-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-sm bg-success">Yes</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>
@endforeach