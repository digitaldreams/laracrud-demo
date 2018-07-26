<?php

namespace App\Http\Controllers\Api\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Api\ApiController;
use Illuminate\Support\Facades\Hash;

/**
 * API user registration
 *
 * @Resource("Register", uri="/auth/register")
 */
class RegisterController extends ApiController
{

    public function store(StepOne $request)
    {
        $user = new User();
        $user->email = $request->get('email');
        $user->password = bcrypt($request->get('password'));


        if ($user->save()) {

            return $this->response->array([
                'status' => 200,
                'message' => 'Successfully registered'
            ]);
        }
        return $this->response->errorInternal('Error occurred');
    }

}
