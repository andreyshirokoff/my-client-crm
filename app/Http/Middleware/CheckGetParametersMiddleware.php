<?php

namespace App\Http\Middleware;

use App\Models\Service;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckGetParametersMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $groupId = Auth::user()->group_id;

        $role = Auth::user()->roles;
        $serviceId = Service::where('group_id', $groupId)->first()->id;

        if($request->query('idservice') !== false)
        {
            if (
                $request->query('idservice') != $serviceId
                || $role != 'administrator'
            )
            {
                abort(404);
            }
        }

        return $next($request);
    }
}
