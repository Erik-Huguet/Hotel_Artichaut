<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Models\News;
use Symfony\Component\HttpFoundation\Response;


class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\jsonResponse
     */
    public function index()
    {
        $news = News::all();
        return response()->json($news);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNewsRequest  $request
     * @return \Illuminate\Http\jsonResponse
     */
    public function store(StoreNewsRequest $request)
    {
        $validateData = $request->validated();
        $newNews = new News();
        $newNews->setRawAttributes($validateData);
        $newNews->save();
        return response()->json($newNews, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\jsonResponse
     */
    public function show(News $news)
    {
        return response()->json($news, Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNewsRequest  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\jsonResponse
     */
    public function update(UpdateNewsRequest $request, News $news)
    {
        $validateData = $request->validated();
        $news->update($validateData);
        return response()->json($news, Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\jsonResponse
     */
    public function destroy(News $news)
    {
        $news->delete();
        return response()->json($news::all());
    }
}
