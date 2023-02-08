<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTypeChamberRequest;
use App\Http\Requests\UpdateTypeChamberRequest;
use App\Models\TypeChamber;
use Illuminate\Http\Response;

class TypeChamberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $typeChamber = TypeChamber::all();
        return response()->json($typeChamber);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTypeChamberRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreTypeChamberRequest $request)
    {
        $validateData = $request->validated();
        $newTypeChamber = new TypeChamber($validateData);
        $newTypeChamber->save();
        return response()->json($newTypeChamber, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TypeChamber  $typeChamber
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(TypeChamber $typeChamber)
    {
        return response()->json($typeChamber, Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTypeChamberRequest  $request
     * @param  \App\Models\TypeChamber  $typeChamber
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateTypeChamberRequest $request, TypeChamber $typeChamber)
    {
        $typeChamber = TypeChamber::findOrFail($typeChamber);
        $validateData = $request->validated($typeChamber);
        $newTypeChamber = new TypeChamber($validateData);
        return response()->json($newTypeChamber, Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TypeChamber  $typeChamber
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(TypeChamber $typeChamber)
    {
        $typeChamber = TypeChamber::findOrFail($typeChamber);
        $typeChamber->delete();
        return response()->json($typeChamber::all());
    }
}
