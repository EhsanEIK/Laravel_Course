<?php

namespace App\Http\Middleware;

use Closure;
use App\Customer;

class TestMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $data=Customer::findorfail(1);
        if($data->email == 'ehsan@gmail.com')
        {
            echo "This is test middleware. <br/>";
            return $next($request);
        }
        else
        {
            return redirect()->to('/');
        }
        
    }
}
