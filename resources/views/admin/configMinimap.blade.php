@extends('admin.main')

@section('title', 'Minimap')

@section('content')
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
<div class="content-wrapper">
    @include('sweetalert::alert')
    @include('admin.uploadMinimap')
</div>
@endsection
