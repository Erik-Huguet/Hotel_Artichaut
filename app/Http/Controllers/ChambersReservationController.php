<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreChambers_ReservationRequest;
use App\Http\Requests\UpdateChambers_ReservationRequest;
use App\Models\Chambers_Reservation;

class ChambersReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreChambers_ReservationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreChambers_ReservationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chambers_Reservation  $chambers_Reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Chambers_Reservation $chambers_Reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chambers_Reservation  $chambers_Reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Chambers_Reservation $chambers_Reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateChambers_ReservationRequest  $request
     * @param  \App\Models\Chambers_Reservation  $chambers_Reservation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateChambers_ReservationRequest $request, Chambers_Reservation $chambers_Reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chambers_Reservation  $chambers_Reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chambers_Reservation $chambers_Reservation)
    {
        //
    }
}
