<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $user = User::all();
        return response()->json($user);
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
            'lastname' => 'required|max255',
            'firstname' => 'required|max255',
            'pseudo' => 'required|max255',
            'email' => 'required|max255',
            'phone' => 'required|max15',
            'avatar' => 'required|max80',
            'password' => 'required|max255',
            'fk_Users_Roles' => 'required',
        ]);

        $newUser = new User([
            'lastname' => $request->get('lastname'),
            'firstname' => $request->get('firstaname'),
            'pseudo' => $request->get('pseudo'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'avatar_user' => $request->get('avatar_user'),
            'password' => $request->get('password'),
            'fk_Users_Roles' => $request->get('fk_Users_Roles'),
        ]);

        $newUser->save();

        return response()->json($newUser);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $user = User::finOrFail($id);

        return response()->json($user);
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
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $user = User::FindOrFail($id);
        $user->delete();

        return response()->json($user::all());
    }
}
