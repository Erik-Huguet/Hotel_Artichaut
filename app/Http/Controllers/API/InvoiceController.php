<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreInvoiceRequest;
use App\Http\Requests\UpdateInvoiceRequest;
use App\Models\Invoice;
use Symfony\Component\HttpFoundation\Response;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {

        $invoice = Invoice::all();
        return response()->json($invoice);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInvoiceRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreInvoiceRequest $request)
    {


        $validateData = $request->validated();
        $newInv = new Invoice($validateData);
        $newInv->save();
        return response()->json($newInv, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Invoice $invoice)
    {

        return response()->json($invoice, Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInvoiceRequest  $request
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateInvoiceRequest $request, Invoice $invoice)
    {
        //Travail Camille
        /*$invoice = Invoice::findOrFail($id);

        $price = $request->has('price') ? $request->get('price') :  $invoice->price;
        $number_invoices = $request->has('number_invoices') ? $request->get('number_invoices') :  $invoice->number_invoices;

        $request->validate([
            'price' => 'sometimes',
            'number_invoices' => 'sometimes'
        ]);

        $invoice->price = $price;
        $invoice->number_invoices = $number_invoices;
        $invoice->save();
        return response()->json($invoice, 200);*/


        //Travail Mathieu
        $validateData = $request->validated();
        $invoice->update($validateData);
        return response()->json($invoice, Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Invoice $invoice)
    {

        $invoice->delete();
        return response()->json($invoice::all());
    }
}
