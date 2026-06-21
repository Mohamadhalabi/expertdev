<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminGate
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Already authenticated this session? Let them through.
        if ($request->session()->get('is_admin') === true) {
            return $next($request);
        }

        // Submitting the password?
        if ($request->isMethod('post') && $request->input('admin_password') !== null) {
            if (hash_equals(config('app.admin_password', ''), $request->input('admin_password'))) {
                $request->session()->put('is_admin', true);
                return redirect($request->url());
            }
            return back()->withErrors(['admin_password' => 'Wrong password.']);
        }

        // Otherwise show the password prompt.
        return response(view('admin.gate'));
    }
}
