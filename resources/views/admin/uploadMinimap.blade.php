<div class="card">
    
    <div class="card-body pt-3">
    <div class="d-flex justify-content-between align-items-center h-25">
    <h1>Upload Minimap <i class="fa-solid fa-map-location"></i></h1>
    <span class="line"></span>
    </div>
    <form action="" method="POST" enctype="multipart/form-data">
                @csrf
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
                        <input class="border-top-0 border-start-0 border-end-0 text-center" type="text" name="title"autocomplete="off"  required>
                    </div>
                    <div class="d-flex flex-column text-black mb-1 p-2">
                        <label for="title" class="m-0 position-relative fw-normal ">Description</label>
                        <input class="border-top-0 border-start-0 border-end-0 text-center" type="text" name="title"autocomplete="off"  required>
                    </div>
                
                    <div class="modal-footer p-0 m-0">
                        <button type="button" class="btn btn-md bg-danger" data-dismiss="modal"><i class="fa-solid fa-xmark"></i> Cancel</button>
                        <button type="submit" class="btn btn-md bg-primary"><i class="fa-solid fa-check"></i>Submit</button>
                    </div>
                </form>
    </div>
</div>