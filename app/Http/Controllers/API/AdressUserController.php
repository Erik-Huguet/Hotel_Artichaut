<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAdressUserRequest;
use App\Http\Requests\UpdateAdressUserRequest;
use App\Models\AdressUser;
use Symfony\Component\HttpFoundation\Response;

class AdressUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $address = AdressUser::all();
        return response()->json($address);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAdressUserRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreAdressUserRequest $request)
    {
        $validateData = $request->validated();
        $newAddress = new AdressUser($validateData);
        $newAddress->save();
        return response()->json($newAddress, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdressUser  $adressUser
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(AdressUser $adressUser)
    {
        return response()->json($adressUser, Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdressUserRequest  $request
     * @param  \App\Models\AdressUser  $adressUser
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateAdressUserRequest $request, AdressUser $adressUser)
    {
        $validateData = $request->validated();
        $adressUser->update($validateData);
        return response()->json($adressUser, Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdressUser  $adressUser
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(AdressUser $adressUser)
    {
        $adressUser->delete();
        return response()->json($adressUser::all());
    }
}
