<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
      '/365833786:AAGX9yZQczQFh2r0OANJKwX_bMuDjH_DSBs/webhook'  // for webhook i need to remove this route from CSRF verification
    ];
}
