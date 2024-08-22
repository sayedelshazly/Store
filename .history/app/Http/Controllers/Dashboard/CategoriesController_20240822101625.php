<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Exception;
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

        try{
            $category = Category::findOrFail($id);
        }catch (Exception $e) {
            return redirect()->route('dashboard.categories.index')->with('info', 'Record Not Found!');
        }

        // if(!$category){  //we comment it as we use findOrFail()
        //     abort(404);
        // }

        //select from categories where id <> $id
        // AND (parent_id IS NULL OR parent_id <> $id)
        $parent = Category::where('id', '<>' , $id)

        //we need this for gr
        ->whereNull('parent_id')
        ->orWhere('parent_id', '<>', $id)

        ->get();
        
        return view('dashboard.categories.edit', compact(['category', 'parent']));
    }

    public function update(Request $request, string $id)
    {
        $category = Category::findOrFail($id);
        $category->update($request->all());
        // $category->fill($request->all())->save() ;

        return redirect()->route('dashboard.categories.index')->with('success', 'Category Updated Successfully!');
    }

    public function destroy(string $id)
    {
        $category = Category::findOrFail($id)->delete();
        return redirect()->route('dashboard.categories.index')->with('delete', 'Category Deleted Successfully!');
    }
}
