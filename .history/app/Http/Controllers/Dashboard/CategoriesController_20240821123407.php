<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoriesController extends Controller
{

    public function index()
    {
        $category = Category::all();
        return view('dashboard.categories.index', compact('category'));
    }

    public function create()
    {
        $parent = Category::all();
        return view('dashboard.categories.create', compact('parent'));
    }

    public function store(Request $request)
    {
        /* $request->input('name');
        $request->post('name');
        $request->query('name'); //from get method
        $request->get('name');
        $request['name'];
        $request->name;

        $request->all();  //return array of all input data
        $request->only(['name', 'status']);
        $request->except(['name', 'status']);
        */

        /* $category = new Category();
        $category->name = $request->post('name'); //we use post method here
        $category->description = $request->description;
        $category->status = $request->status;
        $category->parent_id = $request->parent_id; */

        //Request Merge
        $request->merge([
            'slug' => Str::slug($request->name)
        ]);
        $category = Category::create($request->all());

        //PRG (post redirect get)
        return redirect()->route('dashboard.categories.index')->with('success', 'Category Created Successfully!');
    }

    public function show(string $id)
    {
        
    }

    public function edit(string $id)
    {
        $request->merge([
            'slug' => Str::slug($request->name)
        ]);
        $category = Category::create($request->all());
        return view('dashboard.categories.edit');
    }

    public function update(Request $request, string $id)
    {
        
    }

    public function destroy(string $id)
    {
        
    }
}
