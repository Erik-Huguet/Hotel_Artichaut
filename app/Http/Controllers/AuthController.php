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
        try{
            $validator = Validator::make($request->all(), [
                'pseudo' => ['required','unique:users'],
                'email' => ['required','unique:users.email'],
                'password' => ['required', ]
            ]) ;

            if ($validator->fails()) {

                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validator->errors()
                ], 401);
            }

            $user = User::create([
                'pseudo' => $request->pseudo,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            return response()->json([Response::HTTP_OK ]);

        } catch (\Throwable $th)
        {
            return response()->json(Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $user = User::where('email', $request->email)->first();

        if (!Auth::attempt($credentials)) {
            return response()->json([
                //Response::HTTP_NOT_FOUND,
                'message' => 'Bad email, not match our records.', 404
            ]);
        }

        if (!Hash::check($request->password, $user->password)) {
            return response()->json([
                //Response::HTTP_NOT_FOUND,
                'message' => 'Bab password.', 401
                //redirect()->to('login')
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
        $tokenId = Str::before(request()->bearerToken(), '|');
        //dd($tokenId);
        auth()->user()->tokens()->where($request->id, $tokenId )->delete();
        return response()->json([Response::HTTP_OK, 'message' => 'token deleted']);
    }

}