<?php

namespace App\Repositories;

use App\Models\Chairman;
use Illuminate\Http\Request;

class ChairmanRepository extends Repository
{
    /**
     * base method
     *
     * @method model()
     */
    public static function model()
    {
        return Chairman::class;
    }

    public static function storeByRequest(Request $request, Chairman $chairman)
    {
        $imagePath = null;
        if ($request->hasFile('image')) {
            if ($chairman->image) {
                unlink(public_path('uploads/websection/' . $chairman->image));
            }
            $ext = $request->file('image')->extension();
            $imagePath = 'chairman-' . uniqid() . '.' . $ext;
            $request->file('image')->move(public_path('uploads/websection'), $imagePath);
        }
        self::query()->updateOrCreate(
            ['id' => $chairman?->id ?? 0],
            [
                'name' => $request->name,
                'title' => $request->title,
                'description' => $request->description,
                'image' => $imagePath ?? $chairman->image
            ]
        );
    }
}
