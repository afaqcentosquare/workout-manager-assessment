<?php

namespace App\Http\Controllers\Web\Auth;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function __invoke(Request $request)
    {
        try {
            Auth::logout();

            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect()->route('login');
        } catch (Exception $ex) {
            return back()->withErrors(['logout' => 'Logout failed: ' . $ex->getMessage()]);
        }
    }
}
