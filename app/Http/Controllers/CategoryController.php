<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function getAllCategories()
    {

        $categories = Category::all();
        foreach ($categories as $category) {
            $category->shops;
            $category->products;
        }

        return response()->json(['categories' => $categories], 200);
    }

    public function getCategory($categoryId)
    {
        $category = Category::find($categoryId);

        if (!$category) return response()->json(['error' => 'Category not found'], 404);

        $category->shops;
        $category->products;

        return response()->json(['category' => $category]);
    }

    public function postCategory(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:categories',
            'status' => 'required'
        ]);

        if ($validator->fails()) {

            //pass validator errors as errors object for ajax response

            return response()->json([
                'errors' => $validator->errors(),
            ], 300);
        }

        $category = new Category();

        $category->name = $request->input('name');
        $category->details = $request->input('details');
        $category->status = $request->input('status');
        $category->parent_id = $request->input('parent_id');
        $category->save();

        return response()->json(['category' => $category], 201);
    }


    public function putCategory(Request $request, $categoryId)
    {
        $category = Category::find($categoryId);
        if (!$category) return response()->json(['error' => 'Category not found'], 404);

        $category->update([
            'name' => $request->input('name'),
            'details' => $request->input('details'),
            'status' => $request->input('status'),
            'parent_id' => $request->input('parent_id')
        ]);

        return response()->json(['category' => $category], 201);
    }

    public function deleteCategory($categoryId)
    {
        $category = Category::find($categoryId);
        if (!$category) return response()->json(['error' => 'Category not found'], 404);
        $category->delete();
        return response()->json(['category' => 'Category deleted successfully'], 201);
    }
}
