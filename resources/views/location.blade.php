<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Location</title>

    <!-- <link rel="stylesheet" href="style-1.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <style>
        * {
            /* @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;1,400&display=swap'); */
            @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;1,400&display=swap');
            font-family: 'Poppins', sans-serif;
        }

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

        .button {
            text-align: center;
            display: inline-block;
            width: 50%;
            padding: 1em 3em;
            border-radius: 2em;
            background: linear-gradient(to right, #56b8dd, #6e80e6, #8467e7, #b444ee, #e639f7, #c63bf0);
            color: white;
            font-size: 14px;
        }

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

            .select1,
            .select2 {
                margin-right: 13px !important;
                font-size: medium;
                height: 6vh;
                /* border: 2px solid black; */
                padding: 10px 5px;
                border-radius: 5px;
            }

            .select3,
            .select4,
            .select5 {
                width: 25% !important;
                margin-right: 1px !important;
                font-size: medium;
                height: 6vh;
                /* border: 2px solid black; */
                padding: 10px 5px;
                border-radius: 5px;
            }

            .btn-link {
                display: flex;
                align-items: center;
                justify-content: center;
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


        select {
            font-size: medium;
            height: 6vh;
            /* border: 2px solid black; */
            padding: 10px 5px;
            border-radius: 5px;
        }
    </style>

</head>

<body>




    <div class="login-page bg-light">
        <div class="container bg-white pt-3 pb-3 pe-5 ps-5 max-div" style="width:80%;min-height:430px;border-radius:10px; ;">




            <div class="row">
                <div class="col-lg-6 col-xl-6 col-md-6 col-sm-12">
                    <img src="vector/Website ztrios-15.png" alt="" style="width:100%;">

                </div>
                <div class="col-lg-6 col-xl-6 col-md-6 col-sm-12 d-flex justify-content-center flex-column">
                    <div class="header mb-3">
                        <h2><b>Business Location!</b></h2>
                        <span style="color: #808080	;
                        ">Enter Your Business Location.</span>

                    </div>
                    <form action="{{url('/post_location/'.$user->id)}}" method="post">
                        @csrf
                        <!-- <label for="language">Select a Programming Language:</label> -->
                        <div>
                            <label for="language">District:</label>

                            <select class="select1 mt-3 me-4" style="width:30%;" name="district" id="language" required>
                                <option value="javascript">Dhaka</option>
                                <option value="python">Barishal</option>
                                <option value="c++">Khulna</option>
                                <option value="java">Gazipur</option>
                            </select>


                            <label for="language">City:</label>
                            <select class="select2 mt-3 me-5" style="width:30%;" name="city" id="language" required>
                                <option value="javascript">Uttara</option>
                                <option value="python">Mirpur</option>
                                <option value="c++">Gulshan</option>
                                <option value="java">Jatrabari</option>
                            </select>

                            <label for="language">Zip Code:</label>
                            <select class="select3 mt-3 me-3" style="width:13%;" name="zipcode" id="language" required>
                                <option value="1200">1200</option>
                                <option value="1040">1040</option>
                                <option value="1240">1240</option>
                                <option value="1300">1300</option>
                                <option value="1100">1100</option>
                            </select>

                            <label for="language">Road No:</label>
                            <select class="select4 mt-3 me-3" style="width:10%;" name="road" id="language" required>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>

                            <label for="language">House No:</label>
                            <select class="select5 mt-3" style="width:10%;" name="house" id="language" required>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>

                        </div>
                        <button class="btn-link mt-3 button mb-4">
                            Continue
                        </button>

                    </form>

                </div>
            </div>
        </div>
    </div>


</body>

</html>