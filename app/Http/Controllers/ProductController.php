<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function getAllProducts()
    {

        $products = Product::all();

        foreach ($products as $product) $product->stocks;


        return response()->json(['products' => $products], 200,[], JSON_NUMERIC_CHECK);
    }

    public function getProduct($productId)
    {
        $product = Product::find($productId);

        if (!$product) return response()->json(['error' => 'Product not found'], 404);

        $product->units;

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
        if (!$category) return response()->json(['error' => 'Category not found'], 404);

        $product = new Product();
        $product->name = $request->input('name');
        $product->status = $request->input('status');

        $category->products()->save($product);


        return response()->json(['product' => $product], 201);
    }


    public function putProduct(Request $request, $productId)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:products',
            'status' => 'required',
            'category_id' => 'required'
        ]);

        if ($validator->fails()) return response()->json(['errors' => $validator->errors(),], 300);

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

    public function assignUnits(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'product_id' => 'required',
            'unit_id' => 'required'
        ]);



        if ($validator->fails()) return response()->json(['errors' => $validator->errors(),], 300);



        $product = Product::find($request->input('product_id'));
        if (!$product) return response()->json(['error' => 'Product not found'], 404);

        $unit = Unit::find($request->input('unit_id'));
        if (!$unit) return response()->json(['error' => 'Unit not found'], 404);

        foreach ($request->input('unit_id') as $unitId) {
          
            $unit = Unit::find($unitId);
            if (!$unit) return response()->json(['error' => 'Unit not found'], 404);
           
            $product->units()->attach($unit);
        }


        return response()->json(['message' => 'Unit assigned successfully']);
    }
}
