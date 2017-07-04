<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\CategoryAttributeValue;

class AttributeController extends Controller
{
    public function index()
    {
    	$categoryAttributes = CategoryAttributeValue::all();
    	return view('admin.attributes.index')->with('categoryAttributes', $categoryAttributes);
    }

    public function create()
    {
    	$categories = Category::renderAsDropdown();
        $categories = str_replace(
            '<select  >',
            '<select id="category_id" name="category_id" class="form-control"',
            $categories
        );
        return view('admin.attributes.create')
        ->with('categories', $categories);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'category_id' => 'required|numeric|exists:categories,id',
        ]);
        $data = $request->all();
        CategoryAttributeValue::create($data);
        return redirect()->route('adminAttribute')->withSuccess('CategoryAttributeValue has been created.');
    }

    public function edit($id)
    {
        $categoryAttributeValue = CategoryAttributeValue::findOrFail($id);
        $categories = Category::renderAsDropdown();
        $categories = str_replace(
            '<select  >',
            '<select id="category_id" name="category_id" class="form-control"',
            $categories
        );
        return view('admin.attributes.edit')
        ->with('categoryAttributeValue', $categoryAttributeValue)
        ->with('categories', $categories);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'category_id' => 'required|numeric|exists:categories,id',
        ]);
        $data = $request->all();
        $categoryAttribute = CategoryAttributeValue::findOrFail($id);
        $categoryAttribute->update($data);
        return redirect()->route('adminAttributeShow', ['id' => $categoryAttribute->id])->withSuccess('CategoryAttributeValue has been updated.');
    }

    public function destroy($id)
    {
        CategoryAttributeValue::destroy($id);
        return redirect('admin/attributes');
    }

    public function show($id)
    {
        $categoryAttributeValue = CategoryAttributeValue::findOrFail($id);
        return view('admin.attributes.attribute')
            ->with('categoryAttributeValue', $categoryAttributeValue);
    }
}
