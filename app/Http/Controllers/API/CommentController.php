<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $comments = Comment::all();
        dd($comments);
        return response()->json($comments);
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
            'title_fr_comment' => 'required|max:50',
            'discribe_fr_comment' => 'required',
            'title_ang_comment' => 'required|max:50',
            'discribe_ang_comment' => 'required',
        ]);

        $newComment = new Comment([
            'title_fr_comment' => $request->get('title_fr_comment'),
            'discribe_fr_comment' => $request->get('discribe_fr_comment'),
            'title_ang_comment' => $request->get('title_ang_comment'),
            'discribe_ang_comment' => $request->get('discribe_ang_comment')
        ]);

        $newComment->save();

        return response()->json($newComment);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $comment = Comment::findOrFail($id);

        return response()->json($comment);
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
        $comment = Comment::findOrfail($id);

        $request->validate([
            'title_fr_comment' => 'required|max:50',
            'discribe_fr_comment' => 'required',
            'title_ang_comment' => 'required|max:50',
            'discribe_ang_comment' => 'required',
        ]);
            $comment->title_fr_comment = $request->get('title_fr_comment');
            $comment->title_ang_comment = $request->get('title_ang_comment');
            $comment->discribe_fr_comment = $request->get('discribe_fr_comment');
            $comment->discrib_ang_comment = $request->get('discrib_ang_comment');

            $comment->save();


            return response()->json($comment);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();

        return response()->json($comment::all());
    }
}
