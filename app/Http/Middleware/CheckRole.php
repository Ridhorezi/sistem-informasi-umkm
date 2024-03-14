<?php

// CheckRole.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CheckRole
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        // Log::info('CheckRole Middleware', [
        //     'user_id' => $request->user()->id ?? null,
        //     'roles' => $roles,
        //     'user_role' => $request->user()->role->name ?? null,
        // ]);

        foreach ($roles as $role) {
            if ($request->user() && $request->user()->hasRole($role)) {
                return $next($request);
            }
        }

        abort(403, 'Unauthorized');
    }
}