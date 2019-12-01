<?php

namespace App\Http\Controllers;

use App\Category;
use App\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ShopController extends Controller
{
    public function getAllShops()
    {

        $shops = Shop::all();
        foreach ($shops as $shop) {
            $shop->categories;
        }

        return response()->json(['shops' => $shops], 200);
    }

    public function getShop($shopId)
    {
        $shop = Shop::find($shopId);

        if (!$shop) return response()->json(['error' => 'Shop not found'], 404);

        $shop->categories;

        return response()->json(['shop' => $shop]);
    }

    public function postShop(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:shops'
        ]);

        if ($validator->fails()) {

            //pass validator errors as errors object for ajax response

            return response()->json([
                'errors' => $validator->errors(),
            ], 300);
        }


        $shop = new Shop();

        $shop->name = $request->input('name');
        $shop->save();

        return response()->json(['shop' => $shop], 201);
    }


    public function putShop(Request $request, $shopId)
    {
        $shop = Shop::find($shopId);
        if (!$shop) return response()->json(['error' => 'Shop not found'], 404);

        $shop->update([
            'name' => $request->input('name')
        ]);

        return response()->json(['shop' => $shop], 201);
    }

    public function deleteShop($shopId)
    {
        $shop = Shop::find($shopId);
        if (!$shop) return response()->json(['error' => 'Shop not found'], 404);
        $shop->delete();
        return response()->json(['shop' => 'Shop deleted successfully'], 201);
    }

    public function assignCategory(Request $request){

        $validator = Validator::make($request->all(), [
            'category_id' => 'required',
            'shop_id' => 'required'
        ]);

        if ($validator->fails()) {

            //pass validator errors as errors object for ajax response

            return response()->json([
                'errors' => $validator->errors(),
            ], 300);
        }

        $category = Category::find($request->input('category_id'));
        if(!$category) return response()->json(['error'=>'Category Not Found']);

        $shop = Shop::find($request->input('shop_id'));
        if(!$shop) return response()->json(['error'=>'Shop Not Found']);

        $shop->categories()->attach($category);

        return response()->json([
            'shop'=>$shop
        ], 201);

    }
}
