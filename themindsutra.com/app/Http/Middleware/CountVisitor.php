<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Visit;
use Carbon\Carbon;

class CountVisitor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response{
        $ip = hash('sha512', $request->ip());
        $url = $_SERVER['REQUEST_URI'];
        if($url == '/'){
            $url = '/index';
        }

        if (Visit::where('created_at', '>=',  Carbon::today())->where('ip_address', $ip)->count() < 1){
            Visit::create([
                'ip_address' => $ip,
                'visited_page' => $url,
            ]);
        }
        return $next($request);
    }
}
