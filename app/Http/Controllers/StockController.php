<?php

namespace App\Http\Controllers;

use App\Product;
use App\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StockController extends Controller
{

    public function getAllStocks()
    {

        $stocks = Stock::all();




        return response()->json(['stocks' => $stocks], 200);
    }

    public function getStock($stockId)
    {
        $stock = Stock::find($stockId);

        if (!$stock) return response()->json(['error' => 'Stock not found'], 404);

        $stock->units;

        return response()->json(['stock' => $stock]);
    }

    public function postStock(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'suppier_id' => 'required',
            'buying_price' => 'required',
            'selling_price' => 'required',
            'quantity' => 'required',
            'alert_quantity' => 'required',
            'unit_value' => 'required',
            'status' => 'required',
            'expiry_date' => 'required',
            'unit_id' => 'required'
        ]);

        if ($validator->fails()) {

            //pass validator errors as errors object for ajax response

            return response()->json([
                'errors' => $validator->errors(),
            ], 300);
        }

        $product = Product::find($request->input('product_id'));
        if (!$product) return response()->json(['error' => 'Product not found'], 404);

        $stock = new Stock();
        $stock->name = $request->input('name');
        $stock->status = $request->input('status');

        $product->stocks()->save($stock);


        return response()->json(['stock' => $stock], 201);
    }


    public function putStock(Request $request, $stockId)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:stocks',
            'status' => 'required',
            'product_id' => 'required'
        ]);

        if ($validator->fails()) return response()->json(['errors' => $validator->errors(),], 300);

        $stock = Stock::find($stockId);
        if (!$stock) return response()->json(['error' => 'Stock not found'], 404);

        $stock->update([
            'name' => $request->input('name'),
            'status' => $request->input('status'),
        ]);

        return response()->json(['stock' => $stock], 201);
    }

    public function deleteStock($stockId)
    {
        $stock = Stock::find($stockId);
        if (!$stock) return response()->json(['error' => 'Stock not found'], 404);
        $stock->delete();
        return response()->json(['stock' => 'Stock deleted successfully'], 201);
    }
}
