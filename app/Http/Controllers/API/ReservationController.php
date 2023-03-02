<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReservationRequest;
use App\Http\Requests\UpdateReservationRequest;
use App\Models\Reservation;
use Symfony\Component\HttpFoundation\Response;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $reservation = Reservation::all();
        return response()->json($reservation);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreReservationRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreReservationRequest $request)
    {
       Reservation::created($request->validated());
       return response()->json([Response::HTTP_CREATED]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Reservation $reservation)
    {

        return response()->json($reservation, Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateReservationRequest  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateReservationRequest $request, Reservation $reservation)
    {
        $validateData = $request->validated();
        $reservation->update($validateData);
        return response()->json($reservation, Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Reservation $reservation)
    {

        $reservation->delete();
        return response()->json($reservation::all());
    }
}
