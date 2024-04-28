<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ForeignStudentRequest;
use App\Models\ForeignStudent;
use App\Repositories\ForeignStudentRepository;
use Illuminate\Http\Request;

class ForeignStudentController extends Controller
{
    public function index()
    {
        $data['pfss'] = ForeignStudentRepository::getAll();
        return view('admin.foreign_student.index', $data);
    }
    public function create()
    {
        return view('admin.foreign_student.create');
    }
    public function store(ForeignStudentRequest $request)
    {
        ForeignStudentRepository::storeByRequest($request);
        return back()->with('success', 'Provision For Foreign Student is created successfully!');
    }
    public function edit(ForeignStudent $foreignStudent)
    {
        return view('admin.foreign_student.edit', compact('foreignStudent'));
    }
    public function update(ForeignStudentRequest $request, ForeignStudent $foreignStudent)
    {
        ForeignStudentRepository::updateByRequest($request, $foreignStudent);
        return back()->with('success', 'Provision For Foreign Student is updated successfully!');
    }
    public function destroy(ForeignStudent $foreignStudent)
    {
        if($foreignStudent->image){
            unlink(public_path('uploads/provision-foreign-student/' . $foreignStudent->image));
        }
        $foreignStudent->delete();
        return back()->with('success', 'Provision For Foreign Student is deleted successfully!');
    }
    public function status(Request $request, ForeignStudent $foreignStudent)
    {
        $request->validate([
            'status' => 'required|in:1,0'
        ]);
        $isActive = 1;
        if ($request->status == 0) {
            $isActive = 0;
        }
        $foreignStudent->update([
            'is_active' => $isActive,
        ]);
        return back()->with('success', 'Status is updated successfully!');
    }
    public function frontStatus(ForeignStudent $foreignStudent)
    {
        $rowCount = ForeignStudentRepository::query()->where('front_status', 1)->first();
        if($rowCount){
            $rowCount->update([
                'front_status' => 0,
            ]);
        }

        $isActive = 1;
        $foreignStudent->update([
            'front_status' => $isActive,
        ]);
        return back()->with('success', 'Status is updated successfully!');
    }
}
