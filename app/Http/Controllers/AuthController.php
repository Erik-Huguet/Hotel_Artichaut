<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Controllers\Controller;

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
                'email' => ['required','unique:users'],
                'password' => ['required']
            ]) ;
           // var_dump($validator);
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
                'token' => User::class->createToken("API TOKEN")->plainTextToken,

            ]);

            return response()->json([
                'status' => true,
                'message' => 'User Created Successfully',

            ], 200);

        } catch (\Throwable $th)
        {
            return response()->json(['status' => false,
            'message' => $th->getMessage()], 500);
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

            if (Auth::attempt($credentials)) {
              //  $request->session()->regenerate();

                $user = User::where('email', $request->email)->first();
                $token = $user->createToken("API TOKEN")->plainTextToken;

                return response()->json([
                    "acces_token" => $token,
                        'token_type' =>'Bearer',
                    'message'=> 'ok logger',
                ]);
            }

            return response()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->onlyInput('email');
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

        // Auth::logout();
       auth()->user()->tokens()->delete();
       // $request->session()->invalidate();
        //
        return response()->json([Response::HTTP_OK, 'message' => 'token deleted']);
    }

}
