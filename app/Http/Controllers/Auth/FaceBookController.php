<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class FaceBookController extends Controller
{
    //
    public function redirectToProviders()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleProviderCallback()
    {
    try {
        $user = Socialite::driver('facebook')->user();

        $saveUser = User::updateOrCreate([
            'facebook_id' => $user->getId(),
        ],[
            'name' => $user->getName(),
            'email' => $user->getEmail(),
            'password' => Hash::make($user->getName().'@'.$user->getId())
                ]);

        Auth::loginUsingId($saveUser->id);

        return redirect()->route('homepage');
        }
    catch (\Throwable $th) {
            throw $th;
        }
    }
}
