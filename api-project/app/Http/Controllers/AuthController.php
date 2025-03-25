<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use Throwable;

class AuthController extends Controller
{
    public function register(RegisterRequest $request): JsonResponse
    {
        $user = User::query()->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json([
            'access_token' => $user->createToken('auth_token')->plainTextToken,
            'user' => $user->only('id', 'name', 'email'),
        ], 201);

    }

    public function login(LoginRequest $request): JsonResponse
    {
        $user = User::query()->where('email', $request->email)->firstOrFail();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['error' => 'Invalid credentials'], 401);
        }

        return response()->json([
            'access_token' => $user->createToken('auth_token')->plainTextToken,
            'user' => $user->only('id', 'name', 'email'),
        ]);
    }

    public function logout(Request $request): JsonResponse
    {
        if ($request->user()) {
            $request->user()->tokens()->delete();
        }
        return response()->json(['message' => 'Logged out']);
    }
}
