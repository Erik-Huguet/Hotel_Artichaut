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


            'lastname'=> 'required|max:255',
            'firstname' => 'required|max:255',
            'pseudo' => 'required|max:255',
            'email' => 'required|max:255',
            'phone' => 'required|max:20',
            'avatar_user' => 'required|max:255',
            'email_verified_at' => 'nullable',
            'password' => 'required|max:255',
            'fk_Users_Roles' => 'required',
        ]);

        $newUser = new User([

            'lastname'=> $request->get('lastname'),
            'firstname' => $request->get('firstname'),
            'pseudo' => $request->get('pseudo'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'avatar_user' => $request->get('avatar_user'),
            'email_verified_at' => $request->get('email_verified_at'),
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
        $user = User::findOrFail($id);

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
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'lastname'=> 'required|max:255',
            'firstname' => 'required|max:255',
            'pseudo' => 'required|max:255',
            'email' => 'required|max:255',
            'phone' => 'required|max:20',
            'avatar_user' => 'required|max:255',
            'email_verified_at' => 'nullable',
            'password' => 'required|max:255',
            'fk_Users_Roles' => 'required',
        ]);


            $user->lastname = $request->get('lastname');
            $user->firstname = $request->get('firstname');
            $user->pseudo = $request->get('pseudo');
            $user->email = $request->get('email');
            $user->phone = $request->get('phone');
            $user->avatar_user = $request->get('avatar_user');
            $user->email_verified_at = $request->get('email_verified_at');
            $user->password = $request->get('password');
            $user->fk_Users_Roles = $request->get('fk_Users_Roles');

            $user->save();

            return response()->json($user);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {

        $user = User::findOrFail($id);

        $user->delete();

        return response()->json($user::all());
    }
}
