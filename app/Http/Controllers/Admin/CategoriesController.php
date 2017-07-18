<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index')->with('categories', $categories);
    }

    public function createCategory()
    {
        return view('admin.categories.createcategory');
    }

    public function storeCategory(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'slug' => 'required',
            'description' => 'nullable|max:255',
            'parent_id' => 'required|numeric'
        ]);
        $data = $request->all();
        $category = Category::create($data);
        return response()->json($category);
    }

    public function createSubCategory()
    {
        $categories = Category::renderAsDropdown();
        $categories = str_replace(
            '<select  >',
            '<select id="parent_id" name="parent_id" class="form-control">',
            $categories
        );
        return view('admin.categories.createsubcategory')
            ->with('categories', $categories);
    }

    public function storeSubCategory(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'slug' => 'required',
            'description' => 'nullable|max:255',
            'parent_id' => 'required|numeric'
        ]);
        $data = $request->all();
        Category::create($data);
        return redirect()->route('adminCategories')->withSuccess('Category has been created.');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.edit')
        ->with('category', $category);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'slug' => 'required',
            'description' => 'nullable|max:255',
            'parent_id' => 'required|numeric'
        ]);
        $data = $request->all();
        $category = Category::findOrFail($id);
        $category->update($data);
        return redirect()
            ->route('adminCategoriesShow', ['id' => $category->id])
            ->withSuccess('Category has been updated.');
    }

    public function destroy($id)
    {
        if (request()->ajax()) {
            $category = Category::findOrFail($id);
            $category->delete();
            return response()->json($category);
        }
        
    }

    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.category')
            ->with('category', $category);
    }
}
