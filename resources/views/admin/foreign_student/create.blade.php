@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Provision For Foreign Students</h1>

    <form action="{{ route('admin.foreign_student.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Add New Provision For Foreign Students</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.foreign_student.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> View All</a>
                </div>
            </div>
            <div class="card-body">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Foreign Student Title <span class="text-danger">*</span></label>
                        <input type="text" name="title" class="form-control" value="{{ old('title') }}" placeholder="Enter foreign students title">
                        @error('title')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Foreign Student Description <span class="text-danger">*</span></label>
                        <textarea name="description" class="form-control editor" cols="30" rows="10" placeholder="Enter description....">{{ old('description') }}</textarea>
                        @error('description')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Photo</label>
                        <div>
                            <input type="file" name="image" class="form-control-file" accept=".png, .jpg, .jpeg, .pdf">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </form>

@endsection
