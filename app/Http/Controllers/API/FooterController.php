<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFooterRequest;
use App\Http\Requests\UpdateFooterRequest;
use App\Models\Footer;
use Symfony\Component\HttpFoundation\Response;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $footer = Footer::all();
        return response()->json($footer);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFooterRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreFooterRequest $request)
    {
        $validateData = $request->validated();
        $newFooter = new Footer($validateData);
        $newFooter->save();
        return response()->json($newFooter, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Footer $footer)
    {
        return response()->json($footer, Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFooterRequest  $request
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateFooterRequest $request, Footer $footer)
    {
        $validateData = $request->validated();
        $footer->update($validateData);
        return response()->json($footer, Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Footer $footer)
    {
        $footer->delete();
        return response()->json($footer::all());
    }
}
