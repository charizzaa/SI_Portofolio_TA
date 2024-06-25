<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class SessionController extends Controller
{


  protected $redirectTo = '/';

  public function index()
  {
    return view('public.login');
  }

  public function login(Request $request)
  {
    try {
      $response = Http::post('http://127.0.0.1:8080/api/login', [
        'email' => $request->email,
        'password' => $request->password,
      ]);

      if ($response->successful()) {
        $content = $response->json();
        $token = $content['token']; // Adjust the key according to the actual response structure
        $user = $content['user'];

        if ($token) {
          // Save the token and user data in the session
          session(['api_token' => $token]);
          session(['user' => $user]);
          return redirect()->route('public.dashboard');
        } else {
          return back()->withErrors(['message' => 'Token not found in the response']);
        }
      } else {
        $errorMessage = $response->json('message') ?? 'Unknown error';
        return back()->withErrors(['message' => 'Error fetching data: ' . $errorMessage]);
      }
    } catch (\Exception $e) {
      // Log the exception message
      \Log::error('Login error: ' . $e->getMessage());
      return back()->withErrors(['message' => 'An error occurred while attempting to log in.']);
    }
  }


  public function logout(Request $request)
  {

    $response = Http::withToken(session('api_token'))->post('http://127.0.0.1:8080/api/logout');
    

    if ($response->successful()) {
      session()->forget('api_token');
      session()->forget('user');
      return redirect()->route('login');
    } else {
      return back()->withErrors(['message' => 'Error logging out']);
    }
  }
}
