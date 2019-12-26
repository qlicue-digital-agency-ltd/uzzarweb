<?php

namespace App\Http\Controllers;

use App\Store;
use App\Voucher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VoucherController extends Controller
{
    public function getAllVouchers()
    {
        return response()->json(['vouchers' => Voucher::all(), 200]);
    }

    public function getVoucher($voucherId)

    {
        $voucher = Voucher::find($voucherId);

        if (!$voucher) return response()->json(['error' => 'Voucher not found'], 404);

        return response()->json(['voucher' => $voucher], 200);
    }

    public function postVoucher(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'store_id' => 'required|unique:vouchers',
            'package_id' => 'required'
        ]);

        if ($validator->fails()) return response()->json(['error' => $validator->errors()], 300);


        $store = Store::find($request->input('store_id'));

        if (!$store) return response()->json(['error' => 'Store not found'], 404);
        $voucher = new Voucher;

        $voucher->code = $this->generateRandomString(15);

        $store->voucher()->save($voucher);

        return response()->json(['voucher', $voucher]);
    }

    public function deleteVoucher($voucherId)
    {
        $voucher = Voucher::find($voucherId);

        if (!$voucher) return response()->json(['error' => 'Voucher not found'], 404);

        $voucher->delete();

        return response()->json(['message' => 'Voucher has been deleted Successfully'], 201);
    }

    public  function generateRandomString($length = 20)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
