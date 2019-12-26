<?php

namespace App\Http\Controllers;

use App\Store;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StoreController extends Controller
{
    public function getAllStores()
    {
        return response()->json(['stores' => Store::all()], 200, [], JSON_NUMERIC_CHECK);
    }

    public function getStore($storeId)
    {
        $store = Store::find($storeId);

        if (!$store) return response()->json(['error' => 'Store not found'], 404);

        return response()->json(['store' => $storeId], 200);
    }

    public function postStore(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'physical_address' => 'required',
            'mobile' => 'required',
            'country' => 'required',
            'district' => 'required',
            'email' => 'required|email',
            'user_id' => 'required',
        ]);

        if ($validator->fails()) return response()->json(['error' => $validator->errors()], 300);

        $user = User::find($request->input('user_id'));

        if (!$user) return response()->json(['error' => 'Store not found'], 404);

        $store = new Store();
        $store->name = $request->input('name');
        $store->physical_address = $request->input('physical_address');
        $store->mobile = $request->input('mobile');
        $store->country = $request->input('country');
        $store->district = $request->input('district');
        $store->email = $request->input('email');

        $user->stores()->save($store);

        return response()->json(['store' => $store], 201);
    }

    public function putStore(Request $request, $storeId)
    {
        $store = Store::find($storeId);

        if (!$store) return response()->json(['error' => 'Store not found'], 404);

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'physical_address' => 'required',
            'mobile' => 'required',
            'country' => 'required',
            'district' => 'required',
            'email' => 'required|email',
        ]);

        if ($validator->fails()) return response()->json(['error' => $validator->errors()], 300);

        $store->update([
            'name' => $request->input('name'),
            'physical_address' => $request->input('physical_address'),
            'mobile' => $request->input('mobile'),
            'country' => $request->input('country'),
            'district' => $request->input('district'),
            'email' => $request->input('email')
        ]);
        return response()->json(['store' => $store], 201);
    }

    public function deleteStore($storeId)
    {
        $store = Store::find($storeId);

        if (!$store) return response()->json(['error' => 'Store not found'], 404);

        $store->delete();

        return response()->json(['store' => 'Store deleted Successfully'], 201);
    }
}
