@extends('admin.main')

@section('title', 'Create Account')

@section('content')
<div class="content-wrapper p-4">
   <div class="page-header ">
      <h3 class="page-title">
          <span class="page-title-icon bg-danger text-white ">
          <i class="mdi mdi-home"></i>
          </span> Create Account
      </h3>
      <nav aria-label="breadcrumb">
          <ul class="breadcrumb">
          <li class="breadcrumb-item active " aria-current="page">
              <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-end"></i>
          </li>
          </ul>
      </nav>
    </div>

      <form action="{{route('createAccount')}}" method="POST" enctype="multipart/form-data">
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
      <div class="d-flex">
        <div class="cards">
            <div class="cards__img"><svg xmlns="http://www.w3.org/2000/svg" width="100%">

                    <rect fill="#ffffff" width="540" height="450"></rect>
                    <defs>
                        <linearGradient id="a" gradientUnits="userSpaceOnUse" x1="0" x2="0" y1="0" y2="100%"
                            gradientTransform="rotate(222,648,379)">
                            <stop offset="0" stop-color="#ffffff"></stop>
                            <stop offset="1" stop-color="#FC726E"></stop>
                        </linearGradient>
                        <pattern patternUnits="userSpaceOnUse" id="b" width="300" height="250" x="0" y="0"
                            viewBox="0 0 1080 900">
                            <g fill-opacity="0.5">
                                <polygon fill="#444" points="90 150 0 300 180 300"></polygon>
                                <polygon points="90 150 180 0 0 0"></polygon>
                                <polygon fill="#AAA" points="270 150 360 0 180 0"></polygon>
                                <polygon fill="#DDD" points="450 150 360 300 540 300"></polygon>
                                <polygon fill="#999" points="450 150 540 0 360 0"></polygon>
                                <polygon points="630 150 540 300 720 300"></polygon>
                                <polygon fill="#DDD" points="630 150 720 0 540 0"></polygon>
                                <polygon fill="#444" points="810 150 720 300 900 300"></polygon>
                                <polygon fill="#FFF" points="810 150 900 0 720 0"></polygon>
                                <polygon fill="#DDD" points="990 150 900 300 1080 300"></polygon>
                                <polygon fill="#444" points="990 150 1080 0 900 0"></polygon>
                                <polygon fill="#DDD" points="90 450 0 600 180 600"></polygon>
                                <polygon points="90 450 180 300 0 300"></polygon>
                                <polygon fill="#666" points="270 450 180 600 360 600"></polygon>
                                <polygon fill="#AAA" points="270 450 360 300 180 300"></polygon>
                                <polygon fill="#DDD" points="450 450 360 600 540 600"></polygon>
                                <polygon fill="#999" points="450 450 540 300 360 300"></polygon>
                                <polygon fill="#999" points="630 450 540 600 720 600"></polygon>
                                <polygon fill="#FFF" points="630 450 720 300 540 300"></polygon>
                                <polygon points="810 450 720 600 900 600"></polygon>
                                <polygon fill="#DDD" points="810 450 900 300 720 300"></polygon>
                                <polygon fill="#AAA" points="990 450 900 600 1080 600"></polygon>
                                <polygon fill="#444" points="990 450 1080 300 900 300"></polygon>
                                <polygon fill="#222" points="90 750 0 900 180 900"></polygon>
                                <polygon points="270 750 180 900 360 900"></polygon>
                                <polygon fill="#DDD" points="270 750 360 600 180 600"></polygon>
                                <polygon points="450 750 540 600 360 600"></polygon>
                                <polygon points="630 750 540 900 720 900"></polygon>
                                <polygon fill="#444" points="630 750 720 600 540 600"></polygon>
                                <polygon fill="#AAA" points="810 750 720 900 900 900"></polygon>
                                <polygon fill="#666" points="810 750 900 600 720 600"></polygon>
                                <polygon fill="#999" points="990 750 900 900 1080 900"></polygon>
                                <polygon fill="#999" points="180 0 90 150 270 150"></polygon>
                                <polygon fill="#444" points="360 0 270 150 450 150"></polygon>
                                <polygon fill="#FFF" points="540 0 450 150 630 150"></polygon>
                                <polygon points="900 0 810 150 990 150"></polygon>
                                <polygon fill="#222" points="0 300 -90 450 90 450"></polygon>
                                <polygon fill="#FFF" points="0 300 90 150 -90 150"></polygon>
                                <polygon fill="#FFF" points="180 300 90 450 270 450"></polygon>
                                <polygon fill="#666" points="180 300 270 150 90 150"></polygon>
                                <polygon fill="#222" points="360 300 270 450 450 450"></polygon>
                                <polygon fill="#FFF" points="360 300 450 150 270 150"></polygon>
                                <polygon fill="#444" points="540 300 450 450 630 450"></polygon>
                                <polygon fill="#222" points="540 300 630 150 450 150"></polygon>
                                <polygon fill="#AAA" points="720 300 630 450 810 450"></polygon>
                                <polygon fill="#666" points="720 300 810 150 630 150"></polygon>
                                <polygon fill="#FFF" points="900 300 810 450 990 450"></polygon>
                                <polygon fill="#999" points="900 300 990 150 810 150"></polygon>
                                <polygon points="0 600 -90 750 90 750"></polygon>
                                <polygon fill="#666" points="0 600 90 450 -90 450"></polygon>
                                <polygon fill="#AAA" points="180 600 90 750 270 750"></polygon>
                                <polygon fill="#444" points="180 600 270 450 90 450"></polygon>
                                <polygon fill="#444" points="360 600 270 750 450 750"></polygon>
                                <polygon fill="#999" points="360 600 450 450 270 450"></polygon>
                                <polygon fill="#666" points="540 600 630 450 450 450"></polygon>
                                <polygon fill="#222" points="720 600 630 750 810 750"></polygon>
                                <polygon fill="#FFF" points="900 600 810 750 990 750"></polygon>
                                <polygon fill="#222" points="900 600 990 450 810 450"></polygon>
                                <polygon fill="#DDD" points="0 900 90 750 -90 750"></polygon>
                                <polygon fill="#444" points="180 900 270 750 90 750"></polygon>
                                <polygon fill="#FFF" points="360 900 450 750 270 750"></polygon>
                                <polygon fill="#AAA" points="540 900 630 750 450 750"></polygon>
                                <polygon fill="#FFF" points="720 900 810 750 630 750"></polygon>
                                <polygon fill="#222" points="900 900 990 750 810 750"></polygon>
                                <polygon fill="#222" points="1080 300 990 450 1170 450"></polygon>
                                <polygon fill="#FFF" points="1080 300 1170 150 990 150"></polygon>
                                <polygon points="1080 600 990 750 1170 750"></polygon>
                                <polygon fill="#666" points="1080 600 1170 450 990 450"></polygon>
                                <polygon fill="#DDD" points="1080 900 1170 750 990 750"></polygon>
                            </g>
                        </pattern>
                    </defs>
                    <rect x="0" y="0" fill="url(#a)" width="100%" height="100%"></rect>
                    <rect x="0" y="0" fill="url(#b)" width="100%" height="100%"></rect>
                </svg></div>
            <div class="cards__avatar">
                <img src="{{asset('img/pro.png')}}" class="profile-pic" alt="profile" id="imgprofile" name="imgprofile">
                <div class="p-image">
                          <i class="fa fa-camera upload-button"></i>
                          <input class="file-upload" type="file" accept="image/*" name="profile" onchange="previewImage()" accept="image/*" required />
                    </div>
            </div>
            <div class="cards__title">ADD PROFILE</div>
            <div class="d-flex flex-row text-black mb-1 p-2">
                <label for="scene" class="m-0 position-relative fw-normal">Type: </label>
                <select class="border-top-0 border-start-0 border-end-0 border-bottom-0 text-center ml-3" name="type" required>
                    <option disabled selected>Select</option>
                    <option value="Admin" name="type">Admin</option>
                    <option value="Staff" name="type">Staff</option>                   
                </select>
            </div>
            <div class="d-flex flex-row text-black mb-1 p-2">
                <label for="scene" class="m-0 position-relative fw-normal">Status: </label>
                <select class="border-top-0 border-start-0 border-end-0 border-bottom-0 text-center ml-3" name="status" required>
                    <option value="" disabled selected>Select</option>
                    <option value="Active" name="status">Active</option>
                    <option value="Inactive" name="status">Inactive</option>
                </select>
            </div>
        </div>
        <div class="col-lg col-md col-sm p-4">
            <div class="card">
                <div class="card-body">
                    <div class="headerProfile">
                        <h1 class="text-black">Register <i class="fa-regular fa-pen-to-square"></i></h1>
                        <span class="line bg-danger"></span>
                    </div>

                    <div class="d-flex justify-content-center align-items-center flex-column col-lg p-4">
                        <div class="d-flex col-lg col-md col-sm">
                            <div class="groupinput">
                                <label for="fname">Firstname</label>
                                <input class="inputProfile border-top-0 border-start-0 border-end-0 text-center"
                                    placeholder="Firstname" type="text" name="fname" autocomplete="off" required>
                            </div>
                            <div class="groupinput">
                                <label for="lname">Latstname</label>
                                <input class="inputProfile border-top-0 border-start-0 border-end-0 text-center"
                                    placeholder="Lastname" type="text" name="lname" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="d-flex col-lg col-md col-sm">
                            <div class="groupinput">
                                <label for="age">Age</label>
                                <input class="inputProfile border-top-0 border-start-0 border-end-0 text-center"
                                    placeholder="Age" type="text" name="age" autocomplete="off" required>
                            </div>
                            <div class="groupinput">
                                <label for="gender">Gender</label>
                                <input class="inputProfile border-top-0 border-start-0 border-end-0 text-center"
                                    placeholder="Gender" type="text" name="gender" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="d-flex col-lg col-md col-sm">
                            <div class="groupinput">
                                <label for="address">Address</label>
                                <input class="inputProfile border-top-0 border-start-0 border-end-0 text-center"
                                    placeholder="Address" type="text" name="address" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="d-flex col-lg col-md col-sm">
                            <div class="groupinput">
                                <label for="username">Username</label>
                                <input class="inputProfile border-top-0 border-start-0 border-end-0 text-center"
                                    placeholder="Username" type="text" name="username" required autocomplete="off" >
                            </div>
                            <div class="groupinput">
                                <label for="password">Password</label>
                                <input class="inputProfile border-top-0 border-start-0 border-end-0 text-center"
                                    placeholder="Password" type="password" name="password" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end col-lg col-md col-sm">
                            <button class="btn-submit btn-sm bg-success rounded-none" type="submit" name="submit"><i
                                    class="fa-solid fa-check"></i> Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </form>
</div>

@endsection
@push('script')
<script>
$(document).ready(function() {
var readURL = function(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.profile-pic').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}


$(".file-upload").on('change', function(){
    readURL(this);
});

$(".upload-button").on('click', function() {
   $(".file-upload").click();
  });
});
function previewImage() {
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("profile").files[0]);

            oFReader.onload = function (oFREvent) {
                document.getElementById("imgprofile").src = oFREvent.target.result;
            };
        };
    </script>
     <script>
        document.getElementById("year").innerHTML = new Date().getFullYear();
    </script>
@endpush