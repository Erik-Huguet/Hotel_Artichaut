<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePictureRequest;
use App\Http\Requests\UpdatePictureRequest;
use App\Models\Picture;
use Symfony\Component\HttpFoundation\Response;


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
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePictureRequest  $request
     * @return \Illuminate\Http\jsonResponse
     */
    public function store(StorePictureRequest $request)
    {
        $validateData = $request->validated();
        $newPicture = new Picture($validateData);
        $newPicture->setRawAttributes($validateData);
        $newPicture->save();
        return response()->json($newPicture, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Picture  $picture
     * @return \Illuminate\Http\jsonResponse
     */
    public function show(Picture $picture)
    {
        return response()->json($picture, Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePictureRequest  $request
     * @param  \App\Models\Picture  $picture
     * @return \Illuminate\Http\jsonResponse
     */
    public function update(UpdatePictureRequest $request, Picture $picture)
    {
        $validateData = $request->validated();
        $picture->update($validateData);
        return response()->json($picture, Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Picture  $picture
     * @return \Illuminate\Http\jsonResponse
     */
    public function destroy(Picture $picture)
    {
        $picture->delete();
        return response()->json($picture::all());
    }
}
