<?php

namespace App\Http\Controllers;

use App\Category;
use App\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function getAllCategories()
    {

        $categories = Category::all();

        foreach ($categories as $category) $category->products;


        return response()->json(['categories' => $categories], 200,[], JSON_NUMERIC_CHECK);
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
            'name' => 'required',
            'status' => 'required',
            'shop_id' => 'required'

        ]);

        if ($validator->fails()) return response()->json(['errors' => $validator->errors(),], 300);


        $shop = Shop::find($request->input('shop_id'));

        if (!$shop) return response()->json(['error', 'Product not found'], 404);

        $category = new Category();

        $category->name = $request->input('name');
        $category->details = $request->input('details');
        $category->status = $request->input('status');
        $category->parent_id = $request->input('parent_id');
        $shop->categories()->save($category);

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
