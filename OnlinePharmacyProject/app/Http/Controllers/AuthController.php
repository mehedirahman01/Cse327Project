<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * @group Auth endpoints
 */
class AuthController extends Controller
{
  /**
    * Shows authenticated user information
    *
    * @authenticated
    *
    * @response 200 {
    *     "id": 2,
    *     "name": "Demo",
    *     "email": "demo@demo.com",
    *     "email_verified_at": null,
    *     "created_at": "2020-05-25T06:21:47.000000Z",
    *     "updated_at": "2020-05-25T06:21:47.000000Z"
    * }
    * @response status=400 scenario="Unauthenticated" {
    *     "message": "Unauthenticated."
    * }
    */
    public function login(){
      return view ("auth.newLogin");
    }

    public function register(){
      return view ("auth.newRegister");
    }
}
