@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Add Slider</h1>

    <form action="{{ route('admin.slider.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Add Slider</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.slider.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> View All</a>
                </div>
            </div>
            <div class="card-body">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Slider Heading</label>
                        <input type="text" name="slider_heading" class="form-control" value="{{ old('slider_heading') }}" placeholder="Enter Slider heading">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Serial</label>
                        <input type="text" name="serial" class="form-control" value="{{ old('serial') }}" placeholder="Enter slider serial number">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Slider Photo <span class="text-danger">*</span></label>
                        <div>
                            <input type="file" name="slider_photo" class="form-control-file">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </form>

@endsection
