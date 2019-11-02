<?php

namespace App\Http\Controllers\Super\Session;

use App\Http\Controllers\Super\BaseController;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class SessionController extends BaseController
{
  protected $redirectTo = '/cliente';
  protected $guard = 'super';

  use AuthenticatesUsers;

  protected function credentials(Request $request)
  {
    $credentials = $request->only($this->username(), 'password');

    return array_add($credentials, 'active', true);
  }

  public function showLoginForm()
  {
    return view('super.session.login');
  }

  public function authenticate(Request $request)
  {
    $validate = validator($request->all(), [
      'email' => 'required|email|max:100',
      'password' => 'required',
    ]);

    // If fails validate
    if ($validate->fails()) :
      // Return error response
      return response()->json([
        'success' => false,
        'data' => $validate->getMessageBag()
      ], 400);
    endif;

    // Merge with active
    $request->merge(['active' => true]);

    // Authenticate user
    if (Auth::guard('super')->attempt($request->only('email', 'password'))) :
      return redirect()->route('super.dashboard.index');
    else :
      return redirect()->route('super.session.login');
    endif;
  }

  public function logout(Request $request)
  {
    $this->guard('super')->logout();

    $request->session()->invalidate();

    return redirect()->route('super.session.login');
  }
}
