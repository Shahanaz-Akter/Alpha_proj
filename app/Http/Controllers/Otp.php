<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Otp_user;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Crypt;


class Otp extends Controller
{


    function forgotten_password()
    {
        return view('forgotten_password');
    }

    function post_forgotten_password(Request $request)
    {
        $mobile = User::where('mobile', $request->mobile)->first();
        // dd($email);

        if ($mobile) {

            $mobile->update([
                'otp' => null,
                'expire_at' => null,
                'pin' => null
            ]);


            $app_key = config('app.alpha_app');
            $number = config('app.number');


            //Generate OTP
            // $user_otp = Otp_user::where('user_id',  $user->id)->latest()->first();
            $now = Carbon::now();
            // dd($now);
            $now_time_plus_10 = $now->addMinute(5);
            $mobile->update([
                'otp' => rand(1234, 9999),
                'expire_at' => $now_time_plus_10,
            ]);
            // dd($user);

            $userr = User::where('mobile', $request->mobile)->first();

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
            return redirect('/further_otp/' . $encrypt_id);
        } else {

            return redirect()->back()->withErrors(['error' => "Whoops! Something went Wrong."]);
        }

        // return view();
    }


    public function further_otp()
    {
        return view('further_otp');
    }

    public function  post_further_otp(Request $request)
    {

        $user = User::where('otp', $request->otp)->first();
        // dd($user);
        $now = Carbon::now();

        // $user && $now->isBefore($user->expire_at)
        if ($user) {
            return redirect('/reset_pin/' . $user->id);
        } else {
            return redirect()->back()->with('error', "Your OTP is Invalid");
        }
    }

    public function reset_pin($id)
    {

        $user =  User::where('id', $id)->first();

        return view('resetpin')->with('user_id', $user->id);
    }

    public function post_resetpin(Request $re, $id)
    {

        $user = User::where('id', $id)->first();

        $user->update([
            'pin' => $re->pin
        ]);

        // return redirect('/login');
        return redirect('/dashboard');
    }

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

        if ($user && $now->isBefore($user->expire_at)) {
            return redirect('/tob/' . $user->id);
        } else {

            return redirect()->back()->with('error', "Your OTP is Invalid");
        }
    }

    public function tob($id)
    {

        $user = user::where('id', $id)->first();
        return view('TOB')->with('user', $user);
    }


    public function post_tob(Request $re, $id)
    {

        $user = user::where('id', $id)->first();

        $user->update(
            [
                'type_of_business' => $re->business
            ]
        );

        return redirect('/location/' . $user->id);
    }

    public function location($id)
    {

        $user = user::where('id', $id)->first();
        return view('location')->with('user', $user);
    }
    public function post_location(Request $re, $id)
    {

        $user = user::where('id', $id)->first();
        $user->update([
            'district' => $re->district,
            'city' => $re->city,
            'road' => $re->road,
            'zipcode' => $re->zipcode,
            'house' => $re->house
        ]);
        return redirect("/pin/" . $user->id);
    }
    public function pin($id)
    {

        $user = User::where('id', $id)->first();
        $change = gettype($user->id);
        return view('pin')->with('user_id', $user->id);
    }
    public function post_pin(Request $re, $user_id)
    {
        $user = user::where('id', $user_id)->first();
        $user->update([
            'password' => Hash::make($re->new_pin),
            'pin' => $re->new_pin
        ]);
        return redirect("/dashboard");
    }

    public function login()
    {
        return view('login');
    }
    public function post_login(Request $re)
    {

        // $error = $re->validate([

        //     'email' => 'required|email|unique:users',
        //     'password' => 'required|min:4|max:10',
        // ]);
        // redirect()->back()->with('error', $error);

        $email = $re->email_or_phn;
        $pass = $re->pass;

        if (Auth::attempt(['email' => $email, 'password' => $pass])) {
            return redirect('/dashboard');
        } else {
            return redirect()->back()->with('error', "User is Not Authenticated")->with('email', $email);
            // return redirect()->back()->withErrors(['error' => 'User is Not Authenticated']);
        }
    }


    public function dashboard()
    {
        return view('dashboard');
    }
}
