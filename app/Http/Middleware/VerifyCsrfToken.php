<?php

namespace OweUBot\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */

    protected $except = [
      '/123456:ABC-DEF1234ghIkl-zyx57W2v1u123ew11/webhook'  // for webhook i need to remove this route from CSRF verification
    ];
}
