<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    /**
     * Handle account login request
     * 
     * @param LoginRequest $request
     * @return Response
     * 
     */
    public function login(Request $request): JsonResponse
    {
        //TO-DO: Criar validacao da request

        $credentials = $request->only('email', 'password');

        
        if (!auth()->attempt($credentials))
            abort(401, 'Invalid Credentials');
    
        // remove tokens do usuario
        //$request->token()->delete();

        
        $token = $request->user()->createToken('auth_token');
        
        return response()->json([
            'data' => [
                'token' => $token->plainTextToken
            ]
        ]);
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return Response
     */
    public function logout(): Response
    {
        return response()->json(['message' => 'User Logout']);
    }

    /**
     * Handle response after user authenticated
     * 
     * @param Request $request
     * @param Auth $user
     * 
     * @return \Illuminate\Http\Response
     */
    protected function authenticated(Request $request, $user) 
    {
        return redirect()->intended();
    }
}