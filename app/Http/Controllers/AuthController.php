<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function Register(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'pseudo' => 'required | unique:users,pseudo',
            'email' => 'required | unique:users,email',
            'password' => 'required',
        ]);

           if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validator->errors()
               ], 401);
           }

        User::create([
            'pseudo' => $request->pseudo,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return response()->json([Response::HTTP_OK]);
    }
    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
    //dd($request->all());
        $credentials = $request->validate([
            'email' => 'required ',
            'password' => 'required',
        ]);

       $user = User::where('email', $request->email)->first() ;
       // dd($user);
        if (!Auth::attempt($credentials)) {
            return response()->json([
                //Response::HTTP_NOT_FOUND,
                'message' => 'Bad email, not match our records.'
            ]);
        }

        if (!Hash::check($request->password, $user->password)) {
            return response()->json([
                //Response::HTTP_NOT_FOUND,
                'message' => 'Bab password.'
            ]);
        }

        $token = $user->createToken("API TOKEN")->plainTextToken;

        $remember_me =  $request->has('remember_me');

        return response()->json([
            "acces_token" => $token,
            'token_type' => 'Bearer',
            "message" => 'ok logger',
            "remember_token" => $remember_me,

        ]);
        //redirect()->to('login')
    }

    public function me(Request $request)
    {
        return $request->user();
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();
        return response()->json([Response::HTTP_OK, 'message' => 'token deleted']);
    }

}