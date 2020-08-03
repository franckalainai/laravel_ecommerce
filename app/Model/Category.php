<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'category_name',
        'description',
        'is_active',
        'image'
    ];

    public static function image($filename, $category){
        if(request()->hasfile($filename)){
            $file = request()->file($filename);
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('image/categories', $filename);
            $category->image = $filename;
        }
    }
}
