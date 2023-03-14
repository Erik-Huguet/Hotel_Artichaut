<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreInfoNewsRequest;
use App\Http\Requests\UpdateInfoNewsRequest;
use App\Models\InfoNews;
use Symfony\Component\HttpFoundation\Response;


class InfoNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\jsonResponse
     */
    public function index()
    {
        $news = InfoNews::all();
        return response()->json($news);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInfoNewsRequest  $request
     * @return \Illuminate\Http\jsonResponse
     */
    public function store(StoreInfoNewsRequest $request)
    {
        $validateData = $request->validated();
        $newNews = new InfoNews($validateData);
        $newNews->save();
        return response()->json($newNews, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InfoNews  $news
     * @return \Illuminate\Http\jsonResponse
     */
    public function show(InfoNews $news)
    {
        return response()->json($news, Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInfoNewsRequest  $request
     * @param  \App\Models\InfoNews  $news
     * @return \Illuminate\Http\jsonResponse
     */
    public function update(UpdateInfoNewsRequest $request, InfoNews $news)
    {
        $validateData = $request->validated();
        $news->update($validateData);
        return response()->json($news, Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InfoNews  $news
     * @return \Illuminate\Http\jsonResponse
     */
    public function destroy(InfoNews $news)
    {
        $news->delete();
        return response()->json($news::all());
    }
}
