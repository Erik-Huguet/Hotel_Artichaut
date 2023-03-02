<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreInvoicesRequest;
use App\Http\Requests\UpdateInvoicesRequest;
use App\Models\Invoices;
use Symfony\Component\HttpFoundation\Response;

class InvoicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {

        $invoices = Invoices::all();
        return response()->json($invoices);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInvoicesRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreInvoicesRequest $request)
    {

        $validateData = $request->validated();
        $newInvoices = new Response($validateData);
        $newInvoices->save();
        return response()->json($newInvoices, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Invoices  $invoices
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Invoices $invoices)
    {

        return response()->json($invoices, Response::HTTP_OK);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invoices  $invoices
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInvoicesRequest  $request
     * @param  \App\Models\Invoices  $invoices
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateInvoicesRequest $request, Invoices $invoices)
    {

        $validateData = $request->validated();
        $invoices->update($validateData);
        return response()->json($invoices, Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invoices  $invoices
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Invoices $invoices)
    {

        $invoices->delete();
        return response()->json($invoices::all());
    }
}
