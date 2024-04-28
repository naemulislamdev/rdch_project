@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Edit Slider</h1>

    <form action="{{ url('admin/slider/update/'.$slider->id) }}" method="post" enctype="multipart/form-data">
        @csrf

        <input type="hidden" name="current_photo" value="{{ $slider->slider_photo }}">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Edit Slider</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.slider.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> View All</a>
                </div>
            </div>
            <div class="card-body">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Slider Heading</label>
                        <input type="text" name="slider_heading" class="form-control" value="{{ $slider->slider_heading }}" autofocus>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Serial</label>
                        <input type="text" name="serial" class="form-control" value="{{ $slider->serial }}" placeholder="Enter slider serial number">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Existing Slider Photo</label>
                        <div>
                            <img src="{{ asset('public/uploads/'.$slider->slider_photo) }}" alt="" class="w_200">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Change Slider Photo</label>
                        <div>
                            <input type="file" name="slider_photo">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>
    </form>

@endsection
