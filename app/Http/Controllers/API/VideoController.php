<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreVideoRequest;
use App\Http\Requests\UpdateVideoRequest;
use App\Models\Video;
use Illuminate\Http\Response;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $Video = Video::all();
        return response()->json($Video);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVideoRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreVideoRequest $request)
    {
        $validateData = $request->validated();
        $newVideo = new Video($validateData);
        $newVideo->save();
        return response()->json($newVideo, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Video $video)
    {
        return response()->json($video, Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVideoRequest  $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateVideoRequest $request, Video $video)
    {
        $video = Video::findOrFail($video);
        $validateData = $request->validated($video);
        $newVideo = new Video($validateData);
        $newVideo->save();
        return response()->json($newVideo, Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Video $video)
    {
        $video = Video::findOrFail($video);
        $video->delete();
        return response()->json($video::all());
    }
}
