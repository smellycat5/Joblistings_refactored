<?php

namespace App\Services;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Mockery\Exception;
use App\Http\Resources\UserResource;

class UserService
{
    /**
     * login Service
     * 
     * @param array $validatedUserCreds
     * @return array
     */
    public function login(array $validatedUserCreds)
    {
        $user = $this->getUserWithCreds($validatedUserCreds);
        $token = $user->createToken('auth_token');
        $result = [
            'user' => new UserResource($user->load('roles')),
            'access_token' => $token->plainTextToken,
            'token_type' => 'Bearer',
        ];
        return $result;
    }

    /**
     * Login validation
     * 
     * @param array $validatedUserCreds
     * @return 
     */
    public function getUserWithCreds(array $validatedUserCreds)
    {
        $user = User::whereEmail($validatedUserCreds['email'])->firstorfail();

        if (!$user || !Hash::check($validatedUserCreds['password'], $user->password)) {
            throw new Exception('Email address or password is invalid');
        }
        return $user;
    }
}
