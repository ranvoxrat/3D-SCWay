@extends('admin.main')
@section('title', 'Dashboard')
@section('content')
<div class="content-wrapper">
<<<<<<< HEAD
          <div class="page-header">
            <h3 class="page-title">
              <span class="page-title-icon bg-gradient-danger text-white ">
=======
          <div class="page-header p-0">
            <h3 class="page-title">
              <span class="page-title-icon bg-danger text-white ">
>>>>>>> 9d0f165443253363713b12d7b0a724c5cd2dc8a8
                <i class="mdi mdi-home"></i>
              </span> Dashboard
            </h3>
            <nav aria-label="breadcrumb">
              <ul class="breadcrumb">
                <li class="breadcrumb-item active " aria-current="page">
                  <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                </li>
              </ul>
            </nav>
          </div>
          <div class="row ">
            <div class="col-md-3 stretch-card grid-margin">
              <div class="card bg-primary card-img-holder text-white">
                <div class="card-body">
                  <img src="{{asset('img/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image">
                  <h6 class="d-flex justify-content-between pt-4">Buildings <i
                      class="fa-solid fa-school mdi-24px float-right"></i></h6>
                  <p class="fs-5">08</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 stretch-card grid-margin">
              <div class="card bg-warning card-img-holder text-white ">
                <div class="card-body">
                  <img src="{{asset('img/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image">
                  <h6 class="d-flex justify-content-between pt-4">Offices<i
                      class="fa-solid fa-school mdi-24px float-right"></i></h6>
                  <p class="fs-5">15</p>
                </div>
              </div>
            </div>

            <div class="col-md-3 stretch-card grid-margin">
              <div class="card bg-danger card-img-holder text-white ">
                <div class="card-body">
                  <img src="{{asset('img/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image">
                  <h6 class="d-flex justify-content-between pt-4">Rooms<i
                      class="fa-solid fa-school mdi-24px float-right"></i></h6>
                  <p class="fs-5">37</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 stretch-card grid-margin">
              <div class="card bg-success card-img-holder text-white ">
                <div class="card-body">
                  <img src="{{asset('img/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image">
                  <h6 class="d-flex justify-content-between pt-4">Campus Ground<i
                      class="fa-solid fa-school mdi-24px float-right"></i></h6>
                  <p class="fs-5">06</p>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection