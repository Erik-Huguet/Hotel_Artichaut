<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Discount;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $discounts = Discount::all();

        return response()->json($discounts);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\jsonResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'title_fr_discount' => 'required|max:50',
            'title_ang_discount' => 'required|max:50',
            'describe_fr' => 'required',
            'describe_ang' => 'required',
            'code_discount' => 'required'
        ]);


        $newDiscount = new Discount([
            'title_fr_discount' => $request->get('title_fr_discount'),
            'title_ang_discount' => $request->get('title_ang_discount'),
            'describe_fr' => $request->get('describe_fr'),
            'describe_ang' => $request->get('describe_ang'),
            'code_discount' => $request->get('code_discount')
        ]);

        $newDiscount->save();

        return response()->json($newDiscount);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\jsonResponse
     */
    public function show($id)
    {
        $discount = Discount::findOrFail($id);

        return response()->json($discount);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\jsonResponse
     */
    public function update(Request $request, $id)
    {
        $discount = Discount::findOrFail($id);

        $request->validate([
            'title_fr_discount' => 'required|max:50',
            'title_eng_discount' => 'required|max:50',
            'describe_fr_discount' => 'required',
            'describe_eng_discount' => 'required',
            'code_discount' => 'required',
            'fk_Users_Discounts' => 'required',
        ]);


        $discount->title_fr_discount = $request->get('title_fr_discount');
        $discount->title_eng_discount = $request->get('title_eng_discount');
        $discount->describe_fr = $request->get('describe_fr_dicount');
        $discount->describe_eng_discount = $request->get('describe_eng_discount');
        $discount->code_discount = $request->get('code_discount');
        $discount->fk_Users_discount = $request->get('fk_Users_discount');

        $discount->save();

        return response()->json($discount);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\jsonResponse
     */
    public function destroy($id)
    {
        $discount = Discount::findOrFail($id);

        $discount->delete();

        return response()->json($discount::all());
    }
}