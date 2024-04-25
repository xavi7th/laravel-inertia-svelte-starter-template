<?php

namespace Modules\UserAuth\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;

class EmailVerificationPromptController extends Controller
{
  /**
   * Display the email verification prompt.
   */
  public function __invoke(Request $request): RedirectResponse|Response
  {
    return $request->user()->hasVerifiedEmail()
      ? redirect()->intended(RouteServiceProvider::HOME)
      : Inertia::render('Auth/VerifyEmail', ['status' => session('status')]);
  }
}