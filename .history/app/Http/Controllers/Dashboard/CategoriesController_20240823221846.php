<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use PhpParser\Node\Stmt\Return_;

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
        $category = new Category(); // To fix the problem of include form view.
        return view('dashboard.categories.create', compact('parent', 'category'));
    }

    public function store(Request $request)
    {

        // validations //we 
        $request->validate(Category::rules());


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

        $request->merge([ //if marge found in the request in form the merge method does not work like (image)
            'slug' => Str::slug($request->name)
        ]);
        //call all form data except [image]
        $data = $request->except('image');
        //custom method
        $new_image_path = $this->UploadImage($request);
        if ($new_image_path) {
            $data['image'] = $new_image_path;
        }
        /* 
        //store images
        if($request->hasFile('image')){
            $file = $request->file('image');
            $path = $file->store('uploads', [
                'disk' => 'public',
            ]);
            $data ['image'] = $path;
        } */

        $category = Category::create($data);
        // $category = Category::create($request->all());

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
        $parent = Category::where('id', '<>' , $id /* ** */)

        //we need this for group
        ->where(function($query) use ($id )/* ** */ {
            $query->whereNull('parent_id')
            ->orWhere('parent_id', '<>', $id);
        })->get();

        return view('dashboard.categories.edit', compact(['category', 'parent']));
    }

    public function update(Request $request, string $id)
    {
        $category = Category::findOrFail($id);
        $old_image = $category->image;
        // dd($old_image);
        $data = $request->except('image');

        $new_image_path = $this->UploadImage($request);
        if ($new_image_path) {
            $data['image'] = $new_image_path;
        }
        /* //we replace it with custom function in this controller
       //store images
        // if($request->hasFile('image')){
        //     $file = $request->file('image');
        //     // $file->getClientOriginalExtension(); 
        //     // $file->getClientOriginalName(); //the original name of file uploaded
        //     $path = $file->store('uploads', [
        //         'disk' => 'public',
        //     ]);
        //     $data ['image'] = $path; //override
        // } 
        */

        $category->update($data);
        if($old_image && isset($data['image'])){
            Storage::disk('public')->delete($old_image);
        }
        // $category->fill($request->all())->save() ;

        return redirect()->route('dashboard.categories.index')->with('success', 'Category Updated Successfully!');
    }

    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        if($category->image){
            Storage::disk('public')->delete($category->image);
        }
        return redirect()->route('dashboard.categories.index')->with('delete', 'Category Deleted Successfully!');
    }

    //Custom Function For Image Upload
    public function UploadImage(Request $request){
        if(!$request->hasFile('image')){ //best practice to put little code in if condition and the large out.
            return;
        }
            $file = $request->file('image');
            // $file->getClientOriginalExtension(); 
            // $file->getClientOriginalName(); //the original name of file uploaded.
            $path = $file->store('uploads', [
                'disk' => 'public',
            ]);
            return $path;
        
    }
}
