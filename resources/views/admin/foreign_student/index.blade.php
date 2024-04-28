@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Provision For Foreign Students</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 mt-2 font-weight-bold text-primary">All Provision For Foreign Students</h6>
            <div class="float-right d-inline">
                <a href="{{ route('admin.foreign_student.create') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add
                    New</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Photo</th>
                            <th>Front Status</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pfss as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->title }}</td>
                                <td><a href="#" class="btn-success btn-sm" data-toggle="modal"
                                    data-target="#description__{{ $row->id }}">See</a></td>
                                <td>
                                    <img src="@if($row->image){{asset('public/uploads/provision-foreign-student/'.$row->image)}} @else {{asset('public/assets/defaults/no-img.jpg')}} @endif" alt="" style="width: 200px;">
                                </td>
                                <td>
                                    @if ($row->front_status == 1)
                                        <a href="#" class="btn-success btn-sm">Active</a>
                                    @elseif ($row->front_status == 0)
                                        <a href="{{ route('admin.foreign_student.front_status',$row->id) }}" class="btn-danger btn-sm" onClick="return confirm('Are you sure? This section show on home page!');">Show</a>
                                    @endif
                                </td>
                                <td>
                                    @if ($row->is_active == 1)
                                        <a href="#" class="btn-success btn-sm" data-toggle="modal"
                                        data-target="#editStatus__{{ $row->id }}">Active</a>
                                    @elseif ($row->is_active == 0)
                                        <a href="#" class="btn-danger btn-sm" data-toggle="modal"
                                        data-target="#editStatus__{{ $row->id }}">Inactive</a>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.foreign_student.edit', $row->id) }}" class="btn btn-warning btn-sm"><i
                                            class="fas fa-edit"></i></a>
                                    <a href="{{ route('admin.foreign_student.destroy', $row->id) }}" class="btn btn-danger btn-sm"
                                        onClick="return confirm('Are you sure?');"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            {{-- Description section --}}
                            <div class="modal fade" id="description__{{ $row->id }}" tabindex="-1" data-backdrop="static" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">See Description</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #000 !important;">
                                                <i class="fa fa-close text-dark"></i>
                                            </button>
                                        </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <p>{!! $row->description !!}</p>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Frontend Status section --}}
                            <div class="modal fade" id="editFrontStatus__{{ $row->id }}" tabindex="-1" data-backdrop="static" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Front Status</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <i class="fa fa-close"></i>
                                            </button>
                                        </div>
                                        <form action="{{ route('admin.foreign_student.front_status',$row->id) }}" method="post">
                                            @csrf
                                            @method('put')
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="">Status <span class="text-danger">*</span></label>
                                                    <Select class="form-control" name="front_status">
                                                        <option value="1" {{$row->front_status == 1? 'selected':'' }}>Active</option>
                                                        <option value="0" {{$row->front_status == 0? 'selected':'' }}>Inactive</option>
                                                    </Select>
                                                    @error('front_status')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Show</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            {{-- Modal section --}}
                            <div class="modal fade" id="editStatus__{{ $row->id }}" tabindex="-1" data-backdrop="static" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Status</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <i class="fa fa-close"></i>
                                            </button>
                                        </div>
                                        <form action="{{ route('admin.foreign_student.status',$row->id) }}" method="post">
                                            @csrf
                                            @method('put')
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="">Status <span class="text-danger">*</span></label>
                                                    <Select class="form-control" name="status">
                                                        <option value="1" {{$row->is_active == 1? 'selected':'' }}>Active</option>
                                                        <option value="0" {{$row->is_active == 0? 'selected':'' }}>Inactive</option>
                                                    </Select>
                                                    @error('status')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
