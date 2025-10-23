<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckCompanyLicense
{
    public function handle(Request $request, Closure $next)
    {
        $user = $request->user();

        if (!$user || !$user->company) {
            return response()->json(['error' => 'Usuário sem empresa vinculada.'], 403);
        }


        if (!$user->company->license_active) {
            return response()->json(['error' => 'Licença da empresa não existe.'], 403);
        }

        return $next($request);
    }
}
