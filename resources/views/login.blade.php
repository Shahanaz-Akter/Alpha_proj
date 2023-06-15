<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <style>
        a {
            text-decoration: none;
            color: gray;
        }


        .login-page {
            width: 100%;
            height: 100vh;
            display: inline-block;
            display: flex;
            align-items: center;
            background: url("{{asset('/assets/images/auth/bg.png')}}");
            background-size: cover;
            background-position: left center;
        }

        .form-right i {
            font-size: 100px;
        }

        .logo img {
            /* height: 40px; */
            width: auto;

        }



        /* /Don't forget to add Font Awesome CSS : "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/ */
        input[type="text"] {
            width: 100%;
            border: 1px solid #A952A5;
            border-radius: 4px;
            margin: 8px 0;
            outline: none;
            padding: 8px;
            box-sizing: border-box;
            transition: 0.3s;
        }

        input[type="text"]:focus {
            border-color: dodgerBlue;
            box-shadow: 0 0 8px 0 dodgerBlue;
        }

        .inputWithIcon input[type="text"] {
            padding-left: 40px;
        }

        .inputWithIcon {
            position: relative;
            display: flex;
            align-items: center;
        }

        .inputWithIcon i {
            position: absolute;
            left: 2;
            font-size: 17px;
            ;
            padding: 9px 8px;
            color: #A952A5;
            transition: 0.3s;
        }

        .inputWithIcon input[type="text"]:focus+i {
            color: dodgerBlue;
        }

        .inputWithIcon.inputIconBg i {
            background-color: #aaa;
            color: #fff;
            padding: 9px 4px;
            border-radius: 4px 0 0 4px;
        }

        .inputWithIcon.inputIconBg input[type="text"]:focus+i {
            color: #fff;
            background-color: dodgerBlue;
        }

        .login-btn {
            padding: 1em 3em;
            border-radius: 2em;
            background: linear-gradient(to right, #56b8dd, #6e80e6, #8467e7, #b444ee, #e639f7, #c63bf0);
            color: white;
            font-size: 14px;
        }

        .login-btn a:hover {
            color: white;
        }

        .login-with img {
            width: 20px;
            height: auto;

        }

        .login-with {
            display: flex;
            gap: 20px;
            align-items: center;

        }

        .icon-holder {
            /* display: inline-block; */
            height: 35px;
            width: 35px;
            border-radius: 50%;
            cursor: pointer;
            display: inline-flex;
            justify-content: center;
            box-shadow: inset 0 0 10px #EEEEEF;
            border: 2px solid #EEEEEF;
            align-items: center;
        }

        /* .cover{
    width: 100%;
} */

        @media(max-width: 458px) {
            .login-page {
                align-items: flex-start;
                padding-top: 12px;
                ;
            }

            .logo img {
                height: 28px;
                ;
            }

            .links span:nth-child(1) {
                font-size: 15px;
                ;
            }

            .container {
                width: 92% !important;
                margin: 5px auto !important;
                padding: 10px 15px !important;
            }
        }

        form input::placeholder {
            font-size: 15px;
            color: #999999;
        }

        .login-page {
            background-image: url('website ztrios/Website ztrios-12.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
</head>

<body>

    <div class="login-page bg-light">
        <div class="container bg-white pt-3 pb-3 pe-5 ps-5 max-div" style="width:80%;min-height:430px;border-radius:10px; ;">
            <div class="d-flex align-items-center justify-content-between">
                <div class="logo">
                    <!-- <img class="w-25" src="website ztrios/Website ztrios-12.png" alt=""> -->
                </div>
                <div class="links">
                    <span>New User?</span>
                    <span><a href="{{route('signup')}}" style="color:#E039F6;">Sign Up</a></span>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-xl-6 col-md-6 col-sm-12">
                    <img src="vector/Website ztrios-12.png" alt="" style="width:100%;">
                    <!-- <img src="{{asset('assets/images/auth/login.png')}}" alt="" style="width:100%;"> -->
                </div>
                <div class="col-lg-6 col-xl-6 col-md-6 col-sm-12 d-flex justify-content-center flex-column">
                    <div class="header mb-3">
                        <h2><b>Welcome Back</b></h2>
                        <span style="color: #808080;">Login To Continue</span>
                    </div>

                    @if (session('error'))
                    <div class="alert alert-danger text-center">
                        {{ session('error') }}
                    </div>
                    @endif


                    @if (session('email'))
                    <div class="alert alert-danger text-center">
                        {{ session('email') }}
                    </div>
                    @endif

                    <form method="POST" action="{{url('/post_login')}}">
                        @csrf

                        <div class="inputWithIcon">
                            <input type="text" placeholder="Email address / Mobile number" name="email_or_phn" required>
                            <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
                        </div>


                        <div class="inputWithIcon">
                            <input type="text" placeholder="Enter Password" name="pass" required>
                            <i class="fa-solid fa-lock"></i>
                        </div>
                        <div class="mt-3 ">
                            <button type="submit" class="login-btn me-3">LOGIN</button>
                            <a href="{{url('/otp')}}">Forget Password?</a>
                        </div>
                        <div class="login-with mt-5">
                            <span>Login With</span>
                            <span class="icon-holder">
                                <img src="logo/fb.png" alt="">
                            </span>
                            <span class="icon-holder">
                                <img src="logo/gogl.png" alt="">

                            </span>
                            <span class="icon-holder">
                                <img src="logo/twt.png" alt="">
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>