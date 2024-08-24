<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'status', 'parent_id', 'description', 'slug', 'image'
    ];

    /* protected $guarded = [
        'name', 'status', 'parent_id', 'description', 'slug', 'image'
    ];   
    -------you can not do any changes for this fields
    */

    public static function rules($id = 0){
        return [
            // 'name' => "required|string|min:3|max:255|unique:categories,name,$id",
            'name' => [
                'required',
                'string',
                'min:3',
                'max:255',
                Rule::unique('categories')
            ]
            'parent_id' => [
                'nullable', 'integer', 'exists:categories,id',
            ],
            'image' => [
                'image', 'mimes:png,jpg', 'max:1048576', 'dimensions:min_width=100, min_height=100',
            ],
            'status' => 'in:active,archived'
        ];
    }
}
