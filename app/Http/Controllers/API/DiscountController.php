<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDiscountRequest;
use App\Http\Requests\UpdateDiscountRequest;
use App\Models\Discount;
use Symfony\Component\HttpFoundation\Response;


class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\jsonResponse
     */
    public function index()
    {
        $discounts = Discount::all();
        return response()->json($discounts);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDiscountRequest  $request
     * @return \Illuminate\Http\jsonResponse
     */
    public function store(StoreDiscountRequest $request)
    {
        $validateData = $request->validated();
        $newDiscount = new Discount($validateData);
         $newDiscount->save();
        return response()->json($newDiscount, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Discount  $discount
     * @return \Illuminate\Http\jsonResponse
     */
    public function show(Discount $discount)
    {
        return response()->json($discount, Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDiscountRequest  $request
     * @param  \App\Models\Discount  $discount
     * @return \Illuminate\Http\jsonResponse
     */
    public function update(UpdateDiscountRequest $request, Discount $discount)
    {
        $validateData = $request->validated();
        $discount->update($validateData);
        return response()->json($discount, Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Discount  $discount
     * @return \Illuminate\Http\jsonResponse
     */
    public function destroy(Discount $discount)
    {
        $discount->delete();
        return response()->json($discount::all());
    }
}
