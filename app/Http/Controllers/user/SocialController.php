<?php

namespace App\Http\Controllers\user;


use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;

class SocialController extends Controller
{

    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();

    }

    public function handleProviderCallback()
    {
        try {
            $user = Socialite::driver('facebook')->user();
        } catch (Exception $e) {
            return redirect('auth/facebook');
        }

        $authUser = $this->findOrCreateUser($user);

        Auth::login($authUser, true);
        return redirect()->route('user');
    }

    private function findOrCreateUser($facebookUser)
    {
        $authUser = User::where('social_id', $facebookUser->id)->first();

        if ($authUser) {
            return $authUser;
        }
        $newfile = 'images/'.$facebookUser->name .'.jpg';
        $file = $facebookUser->avatar_original;
        if ($file) {
            if (!copy($file, $newfile)) {
                echo "failed to copy $file";
            } else {
                echo "Copied Profile Picture";
            }
        }


        return User::create([
            'fullname' => $facebookUser->name,
            'email' => isset($facebookUser->email) ? $facebookUser->email : $facebookUser->id,
            'login_type' => 'facebook',
            'social_id' => $facebookUser->id,
            'image_location' => $newfile,
            // 'avatar' => $facebookUser->avatar
        ]);
    }

}
