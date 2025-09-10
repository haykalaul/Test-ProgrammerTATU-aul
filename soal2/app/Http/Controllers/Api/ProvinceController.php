<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\ProvinceResource;
use App\Models\Province;

class ProvinceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ProvinceResource::collection(Province::all());
    }
     public function show(Province $provinsi)
    {
        return new ProvinceResource($provinsi);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $data = $request->validate([
            'code' => 'required|string|max:5|unique:provinces,code',
            'name' => 'required|string|max:100',
        ]);
        $provinsi = Province::create($data);

        return (new ProvinceResource($provinsi))
               ->response()
               ->setStatusCode(201);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Province $provinsi)
    {
        $data = $request->validate([
            'code' => 'sometimes|required|string|max:5|unique:provinces,code,' . $provinsi->id,
            'name' => 'sometimes|required|string|max:100',
        ]);

        $provinsi->update($data);

        return new ProvinceResource($provinsi);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Province $provinsi)
    {
        $provinsi->delete();

        return response()->json(['message' => 'deleted'], 204);
    }
}
