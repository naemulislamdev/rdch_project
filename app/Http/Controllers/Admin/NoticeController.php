<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NoticeRequest;
use App\Models\Notice;
use App\Repositories\NoticeRepository;
use File;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function index()
    {
        $data['notices'] = NoticeRepository::getAll();
        return view('admin.notice.index', $data);
    }
    public function create()
    {
        return view('admin.notice.create');
    }
    public function store(NoticeRequest $request)
    {
        NoticeRepository::storeByRequest($request);
        return back()->with('success', 'Notice is created successfully!');
    }
    public function edit(Notice $notice)
    {
        return view('admin.notice.edit', compact('notice'));
    }
    public function update(NoticeRequest $request, Notice $notice)
    {
        NoticeRepository::updateByRequest($request, $notice);
        return back()->with('success', 'Notice is updated successfully!');
    }
    public function destroy(Notice $notice)
    {
        if ($notice->image) {
            unlink(public_path('uploads/notices/' . $notice->image));
        }
        $notice->delete();
        return back()->with('success', 'Notice is deleted successfully!');
    }
    public function status(Request $request, Notice $notice)
    {
        $request->validate([
            'status' => 'required|in:1,0'
        ]);
        $isActive = 1;
        if ($request->status == 0) {
            $isActive = 0;
        }
        $notice->update([
            'is_active' => $isActive,
        ]);
        return back()->with('success', 'Status is updated successfully!');
    }
}
