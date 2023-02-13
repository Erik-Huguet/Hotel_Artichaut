<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;


class AuthController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function Register(Request $request)
    {
        $validator = Validator::class->make($request->all(),[
            StoreUserRequest::class->validated($request)
        ]);

        if($validator->fails())
        {
            return response()->json([ Response::HTTP_BAD_REQUEST ]);
        }
        $user = new User();
        $user->setRawAttributes($request->validate(StoreUserRequest::class->rules()));
        $user->save();
        return response()->json(Response::HTTP_CREATED);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(request $request)
    {
        $validator = Validator::class->make($request->all(),[
            StoreUserRequest::class->validated($request)
        ]);

        if(!$validator->fails())
        {
            return response()->json( Response::HTTP_BAD_REQUEST);
        }

        $credentials = request(['email', 'password']);

        if(!Auth::attempt($credentials))
        {
            return response()->json(Response::HTTP_UNAUTHORIZED);
        }

        $user = User::where('email', $request->email)->first();
        $tokenResult = $user->createToken('authToken')->plainTextToken;

        return response()->json([Response::HTTP_OK, 'token'=> $tokenResult ]);

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->deleted();
        return response()->json([Response::HTTP_OK, 'message'=> 'token deleted']);
    }

}
