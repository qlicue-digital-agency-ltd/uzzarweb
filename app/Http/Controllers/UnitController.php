<?php

namespace App\Http\Controllers;

use App\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UnitController extends Controller
{

    public function getAllUnits()
    {
        return response()->json(['units' => Unit::all()], 200);
    }

    public function getUnit($unitId)
    {
        $unit = Unit::find($unitId);

        if (!$unit) return response()->json(['error' => 'Unit not found'], 404);

        return response()->json(['unit' => $unitId], 200);
    }

    public function postUnit(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:units',
            'si_unit' => 'unique:units'
        ]);

        if ($validator->fails()) return response()->json(['error' => $validator->errors()], 300);

        $unit = new Unit();
        $unit->name = $request->input('name');
        $unit->si_unit = $request->input('si_unit');

        $unit->save();

        return response()->json(['unit' => $unit], 201);
    }

    public function putUnit(Request $request, $unitId)
    {
        $unit = Unit::find($unitId);

        if (!$unit) return response()->json(['error' => 'Unit not found'], 404);

        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:units',
            'si_unit' => 'unique:units'
        ]);

        if ($validator->fails()) return response()->json(['error' => $validator->errors()], 300);

        $unit->update([
            'name' => $request->input('name'),
            'si_unit' => $request->input('si_unit')
        ]);
        return response()->json(['unit' => $unit], 201);
    }

    public function deleteUnit($unitId)
    {
        $unit = Unit::find($unitId);

        if (!$unit) return response()->json(['error' => 'Unit not found'], 404);

        $unit->delete();

        return response()->json(['unit' => 'Unit deleted Successfully'], 201);
    }
}
