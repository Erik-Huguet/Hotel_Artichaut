<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreServicesRequest;
use App\Http\Requests\UpdateServicesRequest;
use App\Models\Services;
use Symfony\Component\HttpFoundation\Response;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $service= Services::all();
        return response()->json($service);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreServicesRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreServicesRequest $request)
    {
        $validateData = $request->validated();
        $newService = new Services($validateData);
        $newService->save();
        return response()->json($newService, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Services $services)
    {
        return response()->json($services, Response::HTTP_OK);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateServicesRequest  $request
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateServicesRequest $request, Services $services)
    {

        $validateData = $request->validated();
        $services->update($validateData);
        return response()->json($services, Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Services $services)
    {

        $services->delete();
        return response()->json($services::all());
    }
}
