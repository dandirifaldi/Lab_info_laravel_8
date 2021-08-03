<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        '/barang/update_status_maintenance',
        '/barang/update_status_bagus',
        '/barang/update_status_rusak'
        // '/barang/update_status_'
    ];
}
