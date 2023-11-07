<?php

namespace App\Http\Middleware;

use App\Exceptions\AppError;
use Illuminate\Support\Facades\Request;
use Closure;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class JWTMiddleware {
    public function handle(Request $request, Closure $next){
        try {
            JWTAuth::parseToken()->authenticate();
            return $next($request);
        } catch (JWTException $error) {
           throw new AppError($error->getMessage(), 500);
        }
    }
}