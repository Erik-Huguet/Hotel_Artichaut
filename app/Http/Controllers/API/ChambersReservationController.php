<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreChambers_ReservationRequest;
use App\Http\Requests\UpdateChambers_ReservationRequest;
use App\Models\Chambers_Reservation;
use Symfony\Component\HttpFoundation\Response;

class ChambersReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $chambreResa = Chambers_Reservation::all();
        return response()->json($chambreResa);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreChambers_ReservationRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreChambers_ReservationRequest $request)
    {
        $validateData = $request->validated();
        $newChambResa = new Chambers_Reservation($validateData);
        $newChambResa->save();
        return response()->json($newChambResa, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chambers_Reservation  $chambers_Reservation
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Chambers_Reservation $chambers_Reservation)
    {
        return response()->json($chambers_Reservation, Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateChambers_ReservationRequest  $request
     * @param  \App\Models\Chambers_Reservation  $chambers_Reservation
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateChambers_ReservationRequest $request, Chambers_Reservation $chambers_Reservation)
    {
        $validateData = $request->validated();
        $chambers_Reservation->update($validateData);
        return response()->json($chambers_Reservation, Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chambers_Reservation  $chambers_Reservation
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Chambers_Reservation $chambers_Reservation)
    {
        $chambers_Reservation->delete();
        return response()->json($chambers_Reservation::all());
    }
}
