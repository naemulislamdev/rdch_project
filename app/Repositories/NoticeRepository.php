<?php

namespace App\Repositories;

use App\Http\Requests\NoticeRequest;
use App\Models\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NoticeRepository extends Repository
{
    /**
     * base method
     *
     * @method model()
     */
    public static function model()
    {
        return Notice::class;
    }
    // public static $path = 'public/uploads/notices/';

    public static function storeByRequest(NoticeRequest $request)
    {
        $imagePath = null;
        if ($request->hasFile('image')) {
            // $imagePath = Storage::put('/'.trim(self::$path,'/'),$request->image,'public');
            $ext = $request->file('image')->extension();
            $imagePath = 'notice-' . uniqid() . '.' . $ext;
            $request->file('image')->move(public_path('uploads/notices'), $imagePath);
        }
        $create = self::create([
            'title' => $request->title,
            'description' => $request->description,
            'notice_date' => $request->notice_date,
            'image' => $imagePath,
            'is_active' => true
        ]);
        return $create;
    }
    public static function updateByRequest(NoticeRequest $request, Notice $notice)
    {
        $imagePath = null;
        if ($request->hasFile('image')) {
            unlink(public_path('uploads/notices/' . $notice->image));
            // $imagePath = Storage::put('/'.trim(self::$path,'/'),$request->image,'public');
            $ext = $request->file('image')->extension();
            $imagePath = 'notice-' . uniqid() . '.' . $ext;
            $request->file('image')->move(public_path('uploads/notices'), $imagePath);
        }
        $update = self::update($notice,[
            'title' => $request->title,
            'description' => $request->description,
            'notice_date' => $request->notice_date,
            'image' => $imagePath ?? $notice->image,
        ]);
        return $update;
    }
}
