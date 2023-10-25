<div class="card">
    <div class="card-body pt-3">
    <div class="d-flex justify-content-between align-items-center h-25">
    <h1>Manage Account</h1>
    <span class="line"></span>
    <!-- <button class="btnAdd" data-toggle="modal" data-target="#add"><i class="fa-solid fa-plus"></i> Add</button> -->
    </div>
    <div class="table-responsive  text-black" style="width:100%">
<table id="account" class=" table-border align-middle accountAdmin" style="width:100%">
        <thead class=" text-white bg-danger ">
            <tr class="align-center">
                <th>No.</th>
                <th>Profile</th>
                <th>FirstName</th>
                <th>Lastname</th>
                <th>Type</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tfoot class=" text-white">
            <!-- <tr class=" align-center">
                <th>No.</th>
                <th>Profile</th>
                <th>FirstName</th>
                <th>Lastname</th>
                <th>Type</th>
                <th>Status</th>
                <th>Action</th>
            </tr> -->
        </tfoot>
    </table>
</div>
    </div>
</div>
@foreach($data as $profile)
<div class="modal fade" id="acountDetail{{$profile['id']}}">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content text-black">
            <div class="modal-body">
            <div class="cardModal ">
               <div class="img-bg">
               <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                  <img class="card-img-top" src="{{asset('/img/faces/' . $profile->profile)}}">
               </div>
                <div class="card-body pt-5 d-flex justify-content-center align-items-center flex-column">
                    <h1>{{$profile->fname}} {{$profile->lname}}</h1>  
                    <h4>Status <span class="badge bg-secondary bg-success">{{$profile->status}}</span></h4>   
                    <h4>Type <span class="badge bg-secondary">{{$profile->type}}</span></h4> 
                </div>
                          
            </div>
          
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
<!-- Edit Modal -->
<div class="modal fade" id="EditProfileAdmin{{$profile['id']}}">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title fs-3 fw-italic"><i class="fa-solid fa-pen-to-square fs-3"></i>Account Configuration</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('EditProfileAdmin', ['id' => $profile->id]) }}" method="POST" enctype="multipart/form-data">
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
                    <div class="d-flex flex-column text-black p-2">
                        <label for="Firstname" class="m-0 position-relative fw-normal">Firstname</label>
                        <input class="border-top-0 border-start-0 border-end-0 text-center" type="text" name="fname" value="{{$profile->fname}}" required>
                    </div>
                    <div class="d-flex flex-column text-black p-2">
                        <label for="Lastname" class="m-0 position-relative fw-normal">Lastname</label>
                        <input class="border-top-0 border-start-0 border-end-0 text-center" type="text" name="lname" value="{{$profile->lname}}" required>
                    </div>
                    <div class="d-flex flex-column text-black mb-1 p-2">
                        <label for="status" class="m-0 position-relative fw-normal">Status</label>
                        <select class="border-top-0 border-start-0 border-end-0 text-center" name="status" required>
                            <option value="" disabled>Choose One </option>                                   
                                <option @if($profile->status=="Active") selected  @endif value="Active">Active</option>
                                <option @if($profile->status=="Inactive") selected  @endif value="Inactive">Inactive</option>
                        </select>
                    </div>
                  
                    <div class="d-flex flex-column text-black mb-1 p-2">
                        <label for="status" class="m-0 position-relative fw-normal">Type</label>
                        <select class="border-top-0 border-start-0 border-end-0 text-center" name="type" required>
                            <option value="" disabled>Choose One </option>                                   
                                <option @if($profile->status=="Admin") selected  @endif value="Admin">Admin</option>
                                <option @if($profile->status=="Staff") selected  @endif value="Staff">Staff</option>
                        </select>
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
<div id="deleteModal{{$profile['id']}}" class="modal fade">
    <div class="modal-dialog modal-dialog-centered modal-confirm">
        <div class="modal-content">
            <div class="modal-header flex-column">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div class="icon-box">
                    <i class="fa fa-times-circle"></i>
                </div>
            </div>
            <div class="modal-body">
                <p class="text-center text-black fs-5">Are you sure you want to delete this Profile? </p>
                <form method="POST" action="{{ route('delProfile', ['id' => $profile->id]) }}">
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
