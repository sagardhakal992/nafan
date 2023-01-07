<?php

namespace App\Http\Middleware;

use Closure;
use Exception;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenBlacklistedException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Facades\JWTAuth;


class JwtAuthentication
{
    /**
     * Handle an incoming requesuse Tymon\JWTAuth\Exceptions\TokenInvalidException;
                                                                                                                                      t.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        try {
            $token = JWTAuth::parseToken();
            $payload = $token->getPayload();
            $user = JWTAuth::authenticate();

            if (null === $user) {
                throw new Exception('User not found', 404);
            }
            app('auth')->setUser($user);

            $member_id = $payload->get('member_id');
            $role = $payload->get('role');
            $request['role_slug'] = $role;

        } catch (TokenExpiredException $e) {
            return response()->json(['status' => false, 'message' => 'Token Expired!', 'statusCode' => (int) 401], 401);
        } catch (TokenBlacklistedException $e) {
            return response()->json(['status' => false, 'message' => 'Token Blacklisted!', 'statusCode' => (int) 401], 401);
        } catch (TokenInvalidException $e) {
            return response()->json(['status' => false, 'message' => 'Invalid Token!', 'statusCode' => (int) 401], 401);
        } catch (JWTException $e) {
            return response()->json(['status' => false, 'message' => 'Not Authorized!', 'statusCode' => (int) 401], 401);
        } catch (Exception $e) {
            return response()->json(['status' => false, 'message' => 'User Not Found!', 'statusCode' => (int) 401], 401);
        }
        return $next($request);
    }

}


