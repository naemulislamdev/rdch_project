@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Message From Chairman</h1>


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 mt-2 font-weight-bold text-primary">Chairman Message</h6>
            <div class="float-right d-inline">
                <a href="" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>
                    View All</a>
            </div>
        </div>
        <form action="{{ route('admin.chairman.update', $chairman?->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control" value="{{ $chairman?->name }}"
                                placeholder="Enter chairman name">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Title <span class="text-danger">*</span></label>
                            <input type="text" name="title" class="form-control" value="{{ $chairman?->title }}"
                                placeholder="Enter chairman title">
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Description <span class="text-danger">*</span></label>
                        <textarea name="description" class="form-control editor" cols="30" rows="10"
                            placeholder="Enter description....">{{ $chairman?->description }}</textarea>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Photo</label>
                            <div>
                                <input type="file" name="image" class="form-control-file" accept=".png, .jpg, .jpeg, .pdf">
                                @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Current Photo</label>
                            <div>
                                <img src="{{ asset('public/uploads/websection/'.$chairman?->image)}}" alt="" style="width: 300px;">
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>
@endsection
