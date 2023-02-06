<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

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
            'title_fr_new' => 'required|max:50',
            'describe_fr_new' => 'required',
            'title_ang_new' => 'required|max:50',
            'describe_ang_new' => 'required',
            'icon_new' => 'required',
            'position_icon' => 'required'
        ]);

        $newNews = new News([
            'title_fr_new' => $request->get('title_fr_new'),
            'describe_fr_new' => $request->get('describe_fr_new'),
            'title_ang_new' => $request->get('title_ang_new'),
            'describe_ang_new' => $request->get('describe_ang_new'),
            'icon_new' => $request->get('icon_new'),
            'position_icon' => $request->get('position_icon')
        ]);

        $newNews->save();

        return response()->json($newNews);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\jsonResponse
     */
    public function show($id)
    {
        $news = News::findOrFail($id);

        return response()->json($news);
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
        $news = News::findOrFail($id);

        $request->validate([
            'title_fr_new' => 'required|max:50',
            'describe_fr_new' => 'required',
            'title_ang_new' => 'required|max:50',
            'describe_ang_new' => 'required',
            'icon_new' => 'required',
            'position_icon' => 'required'
        ]);

        $news->title_fr_new = $request->get('title_fr_new');
        $news->describe_fr_new = $request->get('describe_fr_new');
        $news->title_ang_new = $request->get('title_ang_new');
        $news->describe_ang_new = $request->get('describe_ang_new');
        $news->icon_new = $request->get('icon_new');
        $news->position_icon = $request->get('position_icon');


        $news->save();

        return response()->json($news);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\jsonResponse
     */
    public function destroy($id)
    {
        $news = News::findOrFail($id);

        $news->delete();

        return response()->json($news::all());
    }
}
