<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAdvantageRequest;
use App\Http\Requests\UpdateAdvantageRequest;
use App\Models\Advantage;
use Symfony\Component\HttpFoundation\Response;


class AdvantageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $advantage = Advantage::all();
        return response()->json($advantage);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAdvantageRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreAdvantageRequest $request)
    {
        $validateData = $request->validated();
        $newAdvantage = new Advantage();
        $newAdvantage->setRawAttributes($validateData);
        $newAdvantage->save();
        return response()->json($newAdvantage, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Advantage  $advantage
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Advantage $advantage)
    {
        return response()->json($advantage, Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdvantageRequest  $request
     * @param  \App\Models\Advantage  $advantage
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateAdvantageRequest $request, Advantage $advantage)
    {
        $validateData = $request->validated();
        $advantage->update($validateData);
        return response()->json($advantage, Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Advantage  $advantage
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Advantage $advantage)
    {

        $advantage->delete();
        return response()->json($advantage::all());
    }
}
