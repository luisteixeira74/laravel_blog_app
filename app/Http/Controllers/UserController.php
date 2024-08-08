<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Services\UserService;
use Symfony\Component\HttpFoundation\JsonResponse as HttpFoundationJsonResponse;

class UserController extends Controller
{
    
    private UserService $userService;

    public function __construct(UserService $userService) 
    {
        $this->userService = $userService;
    }

    public function store(Request $request): JsonResponse 
    {
        $user = $this->userService->store($request);

        return response()->json($user, 200, []);
    }
}
