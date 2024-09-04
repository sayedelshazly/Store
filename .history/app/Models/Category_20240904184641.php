<?php

namespace App\Models;

use App\Rules\Filter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

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
                Rule::unique('categories', 'name')->ignore($id),
                //here we need a custom validation with my own rule [way1].
                /* function($attribute, $value, $fails){ //closure function.
                    if(strtolower($value) == 'laravel'){
                        $fails('no no no!!');
                    }
                } */
            
                //we use Filter class [way2]
                /* new Filter(['laravel', 'php', 'sql']), */

                //we make a validation called [filter] in service provide [way3]
                //one value
                // 'filter' 
                //multiple value
                'filter:php,laravel,html,user,admin,sql,function,class,gmail,password'
            ],
            'parent_id' => [
                'nullable', 'integer', 'exists:categories,id',
            ],
            'image' => [
                'image', 'mimes:png,jpg', 'max:1048576', 'dimensions:min_width=100, min_height=100',
            ],
            'status' => 'required|in:active,archived'
        ];
    }

    /* local scope for filter the categories table */
    /* public function scopeFilter(Builder $query, $request)
    {
        if ($name = $request->query('name')) {
            $query->where('name', 'LIKE', "%{$name}%");
        }
        if ($status = $request->query('status')) {
            $query->where('status', $status);
        }
        return $query;
    } */
    /* local scope for filter the categories table ((another way)) */
    public function scopeFilter(Builder $builder , $filters){
        
    }

}
