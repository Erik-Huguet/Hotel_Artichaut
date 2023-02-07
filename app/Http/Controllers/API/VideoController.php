<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $video = Video::all();

        return response()->json($video);

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
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'title_fe_video' => 'require|max:255',
            'describe_fr_video' => 'require|max:255',
            'title_eng_video' => 'require|max:255',
            'describe_eng_video' => 'require|max:255',
            'url_video' => 'require|max:255',
            'fk_Users_Videos' => 'required',
        ]);

        $newVideo = new Video([
            'title_fr_video' => $request->get('title_fr_video'),
            'describe_fr_video' => $request->get('describe_fr_video'),
            'title_eng_video' => $request->get('title_eng_video'),
            'describe_eng_video' => $request->get('describe_eng_video'),
            'url_video' => $request->get('url_video'),
            'fk_Users_Videos' => $request->get('fk_Users_Videos'),
        ]);
        $newVideo->save();
        return response()->json($newVideo);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $video = Video::findOrFail($id);

        return response()->json($video);
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
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $video = Video::findOrFail($id);

        $request->validate([
            'title_fe_video' => 'require|max:255',
            'describe_fr_video' => 'require|max:255',
            'title_eng_video' => 'require|max:255',
            'describe_eng_video' => 'require|max:255',
            'url_video' => 'require|max:255',
            'fk_Users_Videos' => 'required',
        ]);

        $newVideo = new Video([
            'title_fr_video' => $request->get('title_fr_video'),
            'describe_fr_video' => $request->get('describe_fr_video'),
            'title_eng_video' => $request->get('title_eng_video'),
            'describe_eng_video' => $request->get('describe_eng_video'),
            'url_video' => $request->get('url_video'),
            'fk_Users_Videos' => $request->get('fk_Users_Videos'),
        ]);
        $newVideo->save();
        return response()->json($newVideo);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $video = Video::findOrFail($id);

        $video->delete();

        return response()->json($video::all());
    }
}
