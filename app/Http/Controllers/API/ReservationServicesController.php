<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReservation_ServicesRequest;
use App\Http\Requests\UpdateReservation_ServicesRequest;
use App\Models\Reservation_Services;
use Symfony\Component\HttpFoundation\Response;

class ReservationServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $reservationServices = Reservation_Services::all();
        return response()->json($reservationServices);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreReservation_ServicesRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreReservation_ServicesRequest $request)
    {
        //Reservation_Services::created($request->validated());
        //return response()->json([Response::HTTP_CREATED]);
        $validateData = $request->validated();
        $newServiceResa = new Reservation_Services($validateData);
        $newServiceResa->save();
        return response()->json($newServiceResa, Response::HTTP_CREATED);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation_Services  $reservation_Services
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Reservation_Services $reservation_Services)
    {
        return response()->json($reservation_Services, Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateReservation_ServicesRequest  $request
     * @param  \App\Models\Reservation_Services  $reservation_Services
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateReservation_ServicesRequest $request, Reservation_Services $reservation_Services)
    {

        $validateData = $request->validated();
        $reservation_Services->update($validateData);
        return response()->json($reservation_Services, Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation_Services  $reservation_Services
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Reservation_Services $reservation_Services)
    {
        $reservation_Services->delete();
        return response()->json($reservation_Services::all());
    }
}
