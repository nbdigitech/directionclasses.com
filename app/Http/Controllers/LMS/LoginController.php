<?php

namespace App\Http\Controllers\LMS;
use Session;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hash;

class LoginController extends Controller
{
    public function register(request $request){
        return view('LMS/Register');
    }

    public function login(request $request){
        return view('LMS/Login');
    }

    public function store(request $request){
        $check = User::where('email',$request->Email)->orWhere('mobile',$request->Mobile)->count();
        if($check==0){
        $user = new User();
        $user->name = $request->Name;
        $user->email = $request->Email;
        $user->mobile = $request->Mobile;
        $user->password = Hash::make($request->Password);
        $user->board = $request->Board;
        $user->class = $request->Class;
        $user->role = 'student';
        $user->save();
        $request->session()->flash('success','You Have Registered Successfully!');
        return redirect()->route('LMS/Register');
        }
        else{
        $request->session()->flash('exists','Email or Mobile Number Already Exists!');
        return redirect()->route('LMS/Register');
        }
    }

    public function attempt_login(request $request){
        $email = $request->Email;
        $password = $request->Password;
        Auth::attempt(['email'=>$email, 'password'=>$password]){
            return redirect()->route('LMS/Dashboard');
        }
    }

    public function forgot_password(request $request){
        return view('LMS.Forgot');
    }

    public function request_otp_session(request $request){
        $random = rand(000000,999999);
        Session::put('OTP',$random);
          $authKey = "240400Ac7u6fo65d837ce6";
          $mobileNumber = $request->Mobile;
          $senderId = "CGSHAS";
          $route = "default";
          $postData = array(
            'authkey' => $authKey,
            'mobiles' => $mobileNumber,
            'message' => $random,
            'sender' => $senderId,
            'route' => $route
          );
          $url="http://api.msg91.com/api/sendhttp.php";
        $ch = curl_init();
            curl_setopt_array($ch, array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POST => true,
                CURLOPT_POSTFIELDS => $postData
        ));
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $output = curl_exec($ch);
        if(curl_errno($ch))
        {
            echo 'error:' . curl_error($ch);
        }
        curl_close($ch);
        return redirect()->route('LMS/RequestOTP');
    }

    public function request_otp(request $request){
        return view('LMS.VerifyOTP');
    }

    public function verify(request $request){
        $session_otp = 
        $request_otp = $request->OTP;
        $request_otp = $request->;
    }
}
