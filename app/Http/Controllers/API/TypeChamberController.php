<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\TypeChamber;
use Illuminate\Http\Request;
use SebastianBergmann\Type\CallableType;

class TypeChamberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\jsonResponse
     */
    public function index()
    {
        $typeChamber = TypeChamber::all();

        return response()->json($typeChamber);
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
            'type' => 'required|max:50',
            'price' => 'required|integer',
        ]);


        $newType = new TypeChamber([
            'type' => $request->get('type'),
            'price' => $request->get('price'),
        ]);

        $newType->save();

        return response()->json($newType);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\jsonResponse
     */
    public function show($id)
    {
        $typeChamber = TypeChamber::findOrFail($id);

        return response()->json($typeChamber);
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
        $newType = TypeChamber::findOrFail($id);

        $request->validate([
            'type' => 'required|max:50',
            'price' => 'required|integer',
        ]);

        $newType->type = $request->get('type');
        $newType->price = $request->get('price');
        $newType->save();

        return response()->json($newType);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\jsonResponse
     */
    public function destroy($id)
    {
        $typeChamber = TypeChamber::findOrFail($id);

        $typeChamber->delete();

        return response()->json($typeChamber::all());
    }
}
