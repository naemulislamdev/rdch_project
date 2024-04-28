@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Edit Notices</h1>

    <form action="{{ route('admin.notice.update', $notice->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Edit Notice</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.notice.index') }}" class="btn btn-primary btn-sm"><i
                            class="fa fa-arrow-left"></i> Back</a>
                </div>
            </div>
            <div class="card-body">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Notice Title <span class="text-danger">*</span></label>
                        <input type="text" name="title" class="form-control" value="{{ $notice->title }}"
                            placeholder="Enter notice title">
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Notice Description <span class="text-danger">*</span></label>
                        <textarea name="description" class="form-control editor" cols="30" rows="10"
                            placeholder="Enter notice description....">{{ $notice->description }}</textarea>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Notice Date <span class="text-danger">*</span></label>
                        <input type="date" name="notice_date" class="form-control" value="{{ $notice->notice_date }}">
                        @error('notice_date')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Notice Photo</label>
                            <div>
                                <input type="file" name="image" class="form-control-file"
                                    accept=".png, .jpg, .jpeg, .pdf">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Notice Current Document</label>
                            <div>
                                @if ($notice->image)
                                <a target="_blank" href="{{ asset('public/uploads/notices/' . $notice->image) }}">Document</a>
                            @else
                                N/a
                            @endif
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>
    </form>
@endsection
