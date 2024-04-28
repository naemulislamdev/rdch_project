<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Chairman;
use App\Repositories\ChairmanRepository;
use Illuminate\Http\Request;

class WebSectionController extends Controller
{
    public function chairmanIndex()
    {
        $chairman = ChairmanRepository::first();
        return view('admin.websection.chairman',compact('chairman'));
    }
    public function chairmanUpdate(Request $request, Chairman $chairman)
    {
        $image = 'required|mimes:png,jpg,jpeg';
        if($chairman->image){
            $image = 'nullable|mimes:png,jpg,jpeg';
        }
        $request->validate([
            'name' => 'required|string',
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => $image
        ]);
        ChairmanRepository::storeByRequest($request, $chairman);
        return back()->with('success', 'Data is updated successfully!');
    }
}
