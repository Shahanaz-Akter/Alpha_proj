<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Otp_user;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Crypt;


class Otp extends Controller
{



    public function signUp()
    {
        return view('signup');
    }

    public function sendOtp(Request $re)
    {


        // dd($re);
        $error = $re->validate([
            'first_name' => 'required|string|min:4|max:255',
            'last_name' => 'required|string|min:4|max:255',
            'user_name' => 'required|string|min:4|max:255',
            'email' => 'required|email|min:4|max:255|unique:users',
            'mobile' => 'required|min:4|max:255|unique:users',

        ]);

        // redirect()->back()->with('error', $error);
        // dd($error);
        User::create(
            $error
            //     [
            //     'first_name' => $re->first_name,
            //     'last_name' => $re->last_name,
            //     'user_name' => $re->user_name,
            //     'email' => $re->email,
            //     'mobile' => $re->mobile,
            // ]


        );

        // dd($re);


        $app_key = config('app.alpha_app');
        $number = config('app.number');

        $this->generateOtp($re->email); //76w36476767


        $userr = User::where('email', $re->email)->first();

        // dd($actual_Otp);

        $otpp = $userr->otp;
        // dd($otpp);

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.sms.net.bd/sendsms',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array('api_key' => $app_key, 'msg' => "Your Ztrios OTP Number:" . $otpp, 'to' => $number),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        // echo ("Message is Successfully Delivered to the Phone Number");

        $encrypt_id = Crypt::encrypt($userr->id);  //for sexurity purpose
        // dd($encrypt_id);
        return redirect('/otp/' . $encrypt_id);
    }


    public function generateOtp($email)
    {
        // $user_otp = Otp_user::where('user_id',  $user->id)->latest()->first();
        $now = Carbon::now();
        // dd($now);
        $now_time_plus_10 = $now->addMinute(5);

        $user = User::where('email', $email)->first();
        return  $user->update([
            'otp' => rand(1234, 9999),
            'expire_at' => $now_time_plus_10,
        ]);
        // dd($user);
    }





    public function Otp($id)
    {


        $decrypt_id =  Crypt::decrypt($id);

        return view('otp')->with(['id', $decrypt_id]);
    }

    public function post_Otp(Request $request)
    {

        $user = User::where('otp', $request->otp)->first();
        // dd($user);
        $now = Carbon::now();

        // $now_time_plus_10 = $now->addMinute(10);
        // $user && $now->isBefore($user->expire_at);

        // if ($now->isBefore($user->expire_at)) {
        // }

        if ($user && $now) {
            return redirect('/tob');
        } else {

            return redirect()->back();
            // echo '<script>showPopupMessage("Data saved successfully.");</script>';
        }
    }

    public function tob()
    {

        return view('TOB');
    }
    public function post_tob(Request $re)
    {

        dd($re);

        // return redirect('/location');
    }

    public function location()
    {
        return view('location');
    }
    public function post_location(Request $re)
    {
        // dd($re);
        return redirect("/pin");
    }
    public function pin()
    {
        return view('pin');
    }
    public function post_pin(Request $re)
    {
        return redirect("/reset_pin");
    }
    public function reset_pin(Request $re)
    {
        return view('resetpin');
    }
    public function post_resetpin(Request $re)
    {
        dd($re);
    }
}
