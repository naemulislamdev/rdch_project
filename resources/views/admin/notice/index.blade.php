@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Sliders</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 mt-2 font-weight-bold text-primary">View Sliders</h6>
            <div class="float-right d-inline">
                <a href="{{ route('admin.notice.create') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add
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
                            <th>Date</th>
                            <th>Document</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($notices as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->title }}</td>
                                <td>{!! $row->description !!}</td>
                                <td>{{ $row->notice_date }}</td>
                                <td>
                                    @if ($row->image)
                                        <a target="_blank"
                                            href="{{ asset('public/uploads/notices/' . $row->image) }}">Document</a>
                                    @else
                                        N/a
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
                                    <a href="{{ route('admin.notice.edit', $row->id) }}" class="btn btn-warning btn-sm"><i
                                            class="fas fa-edit"></i></a>
                                    <a href="{{ route('admin.notice.destroy', $row->id) }}" class="btn btn-danger btn-sm"
                                        onClick="return confirm('Are you sure?');"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
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
                                        <form action="{{ route('admin.notice.status',$row->id) }}" method="post">
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
