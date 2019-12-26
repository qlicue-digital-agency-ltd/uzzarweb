<?php

namespace App\Http\Controllers;

use App\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PackageController extends Controller
{
    public function getAllPackages()
    {
        return response()->json(['packages' => Package::all()], 200, [], JSON_NUMERIC_CHECK);
    }

    public function getPackage($packageId)
    {
        $package = Package::find($packageId);

        if (!$package) return response()->json(['error' => 'Package not found'], 404);

        return response()->json(['package' => $packageId], 200);
    }

    public function postPackage(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:packages',
            'amount' => 'required|unique:packages',
            'commision' => 'required'
        ]);

        if ($validator->fails()) return response()->json(['error' => $validator->errors()], 300);

        $package = new Package();
        $package->name = $request->input('name');
        $package->amount = $request->input('amount');
        $package->commision = $request->input('commision');

        $package->save();

        return response()->json(['package' => $package], 201);
    }

    public function putPackage(Request $request, $packageId)
    {
        $package = Package::find($packageId);

        if (!$package) return response()->json(['error' => 'Package not found'], 404);

        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:packages',
            'amount' => 'required|unique:packages',
            'commision' => 'required'
        ]);

        if ($validator->fails()) return response()->json(['error' => $validator->errors()], 300);

        $package->update([
            'name' => $request->input('name'),
            'amount' => $request->input('amount'),
            'commision' => $request->input('commision')
        ]);
        return response()->json(['package' => $package], 201);
    }

    public function deletePackage($packageId)
    {
        $package = Package::find($packageId);

        if (!$package) return response()->json(['error' => 'Package not found'], 404);

        $package->delete();

        return response()->json(['package' => 'Package deleted Successfully'], 201);
    }
}
