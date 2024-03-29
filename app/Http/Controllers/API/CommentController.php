<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use App\Models\Comment;
use Symfony\Component\HttpFoundation\Response;


class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    /* Affichage (recupere tout les instances du model */
    public function index()
    {
        $comment = Comment::all();
        return response()->json($comment);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCommentRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    /*Creation de nouveau commentaire*/
    public function store(StoreCommentRequest $request)
    {
       // Comment::created($request->validate());
        $validateData = $request->validated();
        $newComment = new Comment();
        $newComment->setRawAttributes($validateData);
        $newComment->save();
        return response()->json($newComment, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Comment $comment)
    {
        return response()->json($comment, Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCommentRequest  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\JsonResponse
     */

    /*Modifications dees données*/
    public function update(UpdateCommentRequest $request, Comment $comment)
    {
        $validateData = $request->validated();
        $comment->update($validateData);
        return response()->json($comment, Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return response()->json($comment::all());
    }
}
