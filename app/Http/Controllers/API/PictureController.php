<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use App\Models\Picture;
use Illuminate\Http\Request;

class PictureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\jsonResponse
     */
    public function index()
    {
        $pictures = Picture::all();

        return response()->json($pictures);
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
            'url_picture' => 'required',
        ]);

        $newPicture = new Picture([
            'url_picture' => $request->get('url_picture')
        ]);

        $newPicture->save();

        return response()->json($newPicture);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\jsonResponse
     */
    public function show($id)
    {
        $picutre = Picture::findOrFail($id);

        return response()->json($picutre);
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
        $picture = Picture::findOrFail($id);

        $request->validate([
            'url_picture' => 'required',

        ]);

        $picture->url_picture = $request->get('url_picture');

        $picture->save();

        return response()->json($picture);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\jsonResponse
     */
    public function destroy($id)
    {
        $picture = Picture::findOrFail($id);

        $picture->delete();

        return response()->json($picture::all());
    }
}
