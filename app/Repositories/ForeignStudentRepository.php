<?php

namespace App\Repositories;

use App\Http\Requests\ForeignStudentRequest;
use App\Models\ForeignStudent;
use Illuminate\Http\Request;

class ForeignStudentRepository extends Repository
{
    /**
     * base method
     *
     * @method model()
     */
    public static function model()
    {
        return ForeignStudent::class;
    }

    public static function storeByRequest(ForeignStudentRequest $request)
    {
        $imagePath = null;
        if ($request->hasFile('image')) {
            $ext = $request->file('image')->extension();
            $imagePath = 'pfs-' . uniqid() . '.' . $ext;
            $request->file('image')->move(public_path('uploads/provision-foreign-student'), $imagePath);
        }
        $create = self::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
            'is_active' => true
        ]);
        return $create;
    }
    public static function updateByRequest(ForeignStudentRequest $request, ForeignStudent $foreignStudent)
    {
        $imagePath = null;
        if ($request->hasFile('image')) {
            unlink(public_path('uploads/provision-foreign-student/' . $foreignStudent->image));
            $ext = $request->file('image')->extension();
            $imagePath = 'pfs-' . uniqid() . '.' . $ext;
            $request->file('image')->move(public_path('uploads/provision-foreign-student'), $imagePath);
        }
        $update = self::update($foreignStudent,[
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath ?? $foreignStudent->image,
        ]);
        return $update;
    }
}
