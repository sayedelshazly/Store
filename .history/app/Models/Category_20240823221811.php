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

    public static function (){

    }
}
