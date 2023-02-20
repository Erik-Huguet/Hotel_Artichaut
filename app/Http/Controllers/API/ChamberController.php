<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreChamberRequest;
use App\Http\Requests\UpdateChamberRequest;
use App\Models\Chamber;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;

class ChamberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {

        $chamber = Chamber::all();
        return response()->json($chamber);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreChamberRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreChamberRequest $request)
    {
        $validateData = $request->validated();
        $newChamber = new Chamber();
        $newChamber->setRawAttributes($validateData);
        $newChamber->save();
        return response()->json($newChamber, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chamber  $chamber
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Chamber $chamber)
    {
        return response()->json($chamber, Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateChamberRequest  $request
     * @param  \App\Models\Chamber  $chamber
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateChamberRequest $request, Chamber $chamber)
    {
        $validateData = $request->validated();
        $chamber->update($validateData);
        return response()->json($chamber, Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chamber  $chamber
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Chamber $chamber)
    {
        $chamber->delete();
        return response()->json($chamber::all());
    }
}
