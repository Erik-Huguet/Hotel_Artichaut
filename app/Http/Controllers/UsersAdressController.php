<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUsersAdressRequest;
use App\Http\Requests\UpdateUsersAdressRequest;
use App\Models\UsersAdress;
use Symfony\Component\HttpFoundation\Response;

class UsersAdressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $addressUsers = UsersAdress::all();
        return response()->json($addressUsers);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUsersAdressRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreUsersAdressRequest $request)
    {
        UsersAdress::created($request->validated());
        return response()->json([Response::HTTP_CREATED]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UsersAdress  $usersAdress
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(UsersAdress $usersAdress)
    {
        return response()->json($usersAdress, Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUsersAdressRequest  $request
     * @param  \App\Models\UsersAdress  $usersAdress
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateUsersAdressRequest $request, UsersAdress $usersAdress)
    {
        $validateData = $request->validated();
        $usersAdress->update($validateData);
        return response()->json($usersAdress, Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UsersAdress  $usersAdress
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(UsersAdress $usersAdress)
    {
        $usersAdress->delete();
        return response()->json($usersAdress::all());
    }
}
