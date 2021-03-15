<?php

namespace App\Http\Controllers;

use Auth;
use PragmaRX\Google2FA\Google2FA;
use App\PasswordSecurity;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PasswordSecurityController extends Controller
{
    public function show2faForm(Request $request)
    {
        $user = Auth::user();

        $google2fa_url = "";
        if ($user->passwordSecurity()->exists()) {
            $google2fa = new Google2FA();
            $google2fa->setAllowInsecureCallToGoogleApis(true);
            $user->google2fa_secret = $google2fa->generateSecretKey();
            $google2fa_url = $google2fa->getQRCodeGoogleUrl(
                'sheikhmujiburrahman.com',
                $user->email,
                $user->passwordSecurity->google2fa_secret
            );
        }
        $data = array(
            'user' => $user,
            'google2fa_url' => $google2fa_url
        );
        return view('auth.2fa')->with('data', $data);
    }

    public function generate2faSecret(Request $request)
    {
        $user = Auth::user();
        // Initialise the 2FA class
        $google2fa = new Google2FA();
        $google2fa->setAllowInsecureCallToGoogleApis(true);

        // Add the secret key to the registration data
        PasswordSecurity::create([
            'user_id' => $user->id,
            'google2fa_enable' => 0,
            'google2fa_secret' => $google2fa->generateSecretKey(),
        ]);

        return redirect('/2fa')->with('success', "Secret Key is generated, Please verify Code to Enable 2FA");
    }

    public function enable2fa(Request $request)
    {
        $user = Auth::user();
        $google2fa = new Google2FA();
        $google2fa->setAllowInsecureCallToGoogleApis(true);
        $secret = $request->input('verify-code');
        $valid = $google2fa->verifyKey($user->passwordSecurity->google2fa_secret, $secret);
        if ($valid) {
            $user->passwordSecurity->google2fa_enable = 1;
            $user->passwordSecurity->save();
            return redirect('2fa')->with('success', "2FA is Enabled Successfully.");
        } else {
            return redirect('2fa')->with('error', "Invalid Verification Code, Please try again.");
        }
    }

    public function disable2fa(Request $request)
    {

        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error", "Your  password does not matches with your account password. Please try again.");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
        ]);
        $user = Auth::user();
        $user->passwordSecurity->google2fa_enable = 0;
        $user->passwordSecurity->save();
        return redirect('/2fa')->with('success', "2FA is now Disabled.");
    }
    public function factordisablenow()
    {
        $user = Auth::user();
        $user->passwordSecurity->google2fa_enable = 0;
        $user->passwordSecurity->save();
        return redirect('/2fa')->with('success', "2FA is now Disabled.");
    }
    public function faLoginCheck($email)
    {
        //$resp = "Responce from server ! your Email: ".$email." and Password: ".$password;
        // $gettingUser = User::where('email',$email)->exists();
        // return $gettingUser;

        if (User::where('email', $email)->exists()) {
            // return "yes user exists...! Email : ".$email;
            // $userId = User::where('email', '=', $email)->first()->id;
            // PasswordSecurity::where('user_id',$userId)->update();
            // return $userId;

            $user = User::where('email',$email)->first();
            $user->passwordSecurity->google2fa_enable = 0;
            $user->passwordSecurity->save();
            return 200;
        }
        else{
            return "This User Doesn't Exists";
        }
    }
}


/// Done
