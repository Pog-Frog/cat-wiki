<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Laravel\Sanctum\Sanctum;

class AdminAuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:web')->except('logout');
    }

    public function login(Request $request)
    {
        return view('login');
    }

    public function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:12'
        ]);

        if ($request->expectsJson()) {
            if (Auth::attempt($request->only('email','password'))) {
                $user = User::where('email', $request->email)->first();
                return response()->json([
                    'token' => $user->createToken($request->email)->plainTextToken,
                    'message' => 'Login successful'
                ]);
            } else {
                throw ValidationException::withMessages([
                    'email' => ['The provided credentials are incorrect.'],
                ]);
            }
        } else {
            if (Auth::attempt($request->only('email','password'))) {
                return redirect()->route('dashboard');
            } else {
                return back()->with('error', 'Invalid login details');
            }
        }
    }

    public function logout(Request $request)
    {
        if($request->expectsJson())
        {
            $model = Sanctum::$personalAccessTokenModel;
            $accessToken = $model::findToken($request->bearerToken());
            $accessToken->delete();
            Auth::logout();
            return response()->json([
                'message' => 'Logout successful'
            ]);
        } else {
            Auth::logout();
            return redirect()->route('login');
        }
    }
}
