<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAddressRequest;
use App\Http\Requests\UpdateAddressRequest;
use App\Models\Address;
use Symfony\Component\HttpFoundation\Response;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $address = Address::all();
        return response()->json($address);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAddressRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreAddressRequest $request)
    {
        $validateData = $request->validated();
        $newAddress = new Address($validateData);
        $newAddress->save();
        return response()->json($newAddress, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Address $address)
    {
        return response()->json($address, Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAddressRequest  $request
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateAddressRequest $request, Address $address)
    {
        $validateData = $request->validated();
        $address->update($validateData);
        return response()->json($address, Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Address $address)
    {
        $address->delete();
        return response()->json($address::all());
    }
}
