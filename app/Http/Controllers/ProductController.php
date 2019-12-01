<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function getAllProducts()
    {

        $products = Product::all();
        

        return response()->json(['products' => $products], 200);
    }

    public function getProduct($productId)
    {
        $product = Product::find($productId);

        if (!$product) return response()->json(['error' => 'Product not found'], 404);

        return response()->json(['product' => $product]);
    }

    public function postProduct(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:products',
            'status' => 'required',
            'category_id' => 'required'
        ]);

        if ($validator->fails()) {

            //pass validator errors as errors object for ajax response

            return response()->json([
                'errors' => $validator->errors(),
            ], 300);
        }

        $category = Category::find($request->input('category_id'));
        if(!$category) return response()->json(['error'=>'Category not found'], 404);

        $product = new Product();
        $product->name = $request->input('name');
        $product->status = $request->input('status');

        $category->products()->save($product);


        return response()->json(['product' => $product], 201);
    }


    public function putProduct(Request $request, $productId)
    {
        $product = Product::find($productId);
        if (!$product) return response()->json(['error' => 'Product not found'], 404);

        $product->update([
            'name' => $request->input('name'),
            'status' => $request->input('status'),
        ]);

        return response()->json(['product' => $product], 201);
    }

    public function deleteProduct($productId)
    {
        $product = Product::find($productId);
        if (!$product) return response()->json(['error' => 'Product not found'], 404);
        $product->delete();
        return response()->json(['product' => 'Product deleted successfully'], 201);
    }
}
