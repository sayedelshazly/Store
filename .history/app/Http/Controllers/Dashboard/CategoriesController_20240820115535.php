<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

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
        $request->input('name');
        $request->input('name');
    }

    public function show(string $id)
    {
        
    }

    public function edit(string $id)
    {
        
    }

    public function update(Request $request, string $id)
    {
        
    }

    public function destroy(string $id)
    {
        
    }
}
