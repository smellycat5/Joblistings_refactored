<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile()
    {
        $user = Auth::guard('sanctum')->user();
        return view('User.profile');
    }

    public function login()
    {
        return view('User.login');
    }

    public function register()
    {
        return view('User.register');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function storeUser(Request $request)
    {
        $validatedUserRegister = $request->validated();
        $user = User::create($validatedUserRegister);
        return redirect()->route('user.login');
 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
