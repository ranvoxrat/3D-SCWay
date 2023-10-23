@extends('admin.main')

@section('title', 'Change Password')

@section('content')
<div class="content-wrapper m-0">
<div class="card">
    
    <div class="card-body pt-3">
    <div class="d-flex justify-content-between align-items-center h-25">
    <h1>Change Password <i class="fa-regular fa-pen-to-square"></i></h1>
    <span class="line"></span>
    </div>
    <form action="{{ route('changePassword') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if ($message = Session::get('success'))
                    <div class="alert-dismiss">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ $message }}</strong>
                            <button type="button" class="close" data-dismiss="a
                            lert" aria-label="Close">
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
                    <div class="d-flex flex-column text-black mb-1 p-2">
                        <label for="title" class="m-0 position-relative fw-normal ">Old Password</label>
                        <input class="border-top-0 border-start-0 border-end-0 text-center" type="text" name="oldpassword"autocomplete="off"  required>
                    </div>
                    <div class="d-flex flex-column text-black mb-1 p-2">
                        <label for="title" class="m-0 position-relative fw-normal ">New Password</label>
                        <input class="border-top-0 border-start-0 border-end-0 text-center" type="text" name="newpassword"autocomplete="off"  required>
                    </div>
                    <div class="d-flex flex-column text-black mb-1 p-2">
                        <label for="title" class="m-0 position-relative fw-normal ">Confirm Password</label>
                        <input class="border-top-0 border-start-0 border-end-0 text-center" type="text" name="confirmpass"autocomplete="off"  required>
                    </div>
                    <div class="modal-footer p-0 m-0">
                        <button type="button" class="btn btn-md bg-danger" data-dismiss="modal"><i class="fa-solid fa-xmark"></i> Cancel</button>
                        <button type="submit" class="btn btn-md bg-primary"><i class="fa-solid fa-check"></i> Update</button>
                    </div>
                </form>
    </div>
</div>
</div>

@endsection