<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online services - Esb Prime serves</title>
    <meta name="description" content="A single window for the most efficient services.The best expression of online service, banking service, tours and travels, and utility payment.">
    <link rel="shortcut icon" href="{{ asset('assets/images/esb2.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/esb2.png') }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/esb2.png') }}" sizes="16x16">
    <meta name="keyword" content="">
    <meta content="GIITS" name="author" />
    <meta property="og:type" content="website">
    <meta property="og:title" content="Online services - Esb Prime serves">
    <meta property="og:description" content="A single window for the most efficient services.The best expression of online service, banking service, tours and travels, and utility payment.">
    <meta property="og:image" content="{{ asset('assets/images/esbfinal.png') }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="Online services - Esb Prime serves">
    <meta name="twitter:description" content="A single window for the most efficient services.The best expression of online service, banking service, tours and travels, and utility payment.">
    <meta name="twitter:image" content="{{ asset('assets/images/esbfinal.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/style1.css') }}">


</head>




<body>
    <style type="text/css">
        * {
            padding: 0;
            margin: 8px 0px !important;
            box-sizing: border-box;
        }

        h1 {
            color: #004cca;
            font-weight: 600;
        }

        .btn1 {

            background-color: #004cca;

        }

        .frgt-pswd {

            color: #004cca;
        }

        .bg-imageclr {
            background-color: #ecffe5;

        }

        .btn1:hover {
            background-color: #0086FF;
        }

        .container,
        .container-lg,
        .container-md,
        .container-sm {
            max-width: 100% !important;
        }

        .input-group {
            position: relative;
            display: block;
            flex-wrap: wrap;
            align-items: stretch;
            width: 100%;
        }

        .alert-dismissible .btn-close {

            padding: 0.70rem 2rem;
        }

        .inp {
            height: 50px;
            width: 45%;
            border: 1px solid;
            outline: none;
            border-radius: 25px;
            font-family: 'Poppins';
        }

        .btn1 {
            height: 40px;
            width: 45%;
            border: none;
            outline: none;
            border-radius: 25px;
            color: white;
            background-color: #004cca;
            font-weight: 600;
            font-family: 'Poppins';
        }

        @media only screen and (max-width: 600px) {
            .inp {
                height: 50px;
                width: 100%;
            }

            .btn1 {
                width: 100%;
            }

        }

        @media (min-width: 1686px) {

            .inp {
                height: 50px;
                width: 40%;
            }

            .btn1 {
                width: 40%;
            }
        }

        @media (min-width: 2000px) {

            .inp {
                height: 60px;
                width: 40%;
            }

            .btn1 {
                height: 50px;
                width: 40%;
            }
        }
    </style>


    <section class="login">
        <div class="container">

            <div class="row " style="justify-content: center;display: flex;align-items: center;height: 90vh;">

                <div class="col-lg-6 xc-row text-center mt-2 "
                    style="display: flex;
                flex-direction: column;">

                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            </button>
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="row"
                        style="    text-align: center;
                    display: flex;
                    justify-content: center;
                    padding-top: 3%;
                }">
                        @if (session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" style="width: 60%;"
                                role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                </button>
                                {{ session('error') }}
                            </div>
                    </div>
                    @endif



                    <a class="logo logo-light mt-5">
                        <img src="{{ asset('assets/images/esb.png') }}" style="width: 60%;"
                            class="d-inline-block align-top" alt="">
                    </a>



                    <Form action="{{ route('login-table') }}" method="post">

                        <div>
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                        </div>

                        @csrf

                        <div class=" input-group form-row">

                            <div class="offset-1 col-lg-12">
                                @error('email')
                                    <div class="invalid-feedback pb-5" style="display: block;">
                                        <div>{{ $message }}</div>
                                    </div>
                                @enderror

                                <input type="text" id="login-email" name="email_check" value=""
                                    class="inp px-3" placeholder="Mail Id">


                            </div>
                        </div>

                        <div class="form-row  " style="
                            text-align: center;
                            display: flex;
                            justify-content: center;
                        ">
                            <div class="offset-1 col-lg-12 inp px-3" id="show_hide_password" style="
                                display: flex;
                                width: 100;
                                justify-content: space-between;
                            ">
                                <input type="password" autocomplete="new-password" class="form-controll" name="password"
                                    placeholder="Password" style="
                                        outline: none;
                                        border: none;
                                        width:90%;
                                    ">
                                <div class="input-group-addon input-group-append">
                                    <a href=""><i class="fa fa-eye-slash" aria-hidden="true" style="
                                        color: gray;
                                    "></i></a>
                                </div>
                            </div>






                        </div>



                        <div class="form-row">
                            <div class="offset-1 col-lg-12" style="padding-bottom: 70px">
                                <button class="btn1">Log in</button>
                            </div>
                        </div>
                    </Form>
                </div>


            </div>
        </div>
        <script>
            $(document).ready(function() {
                $("#show_hide_password a").on('click', function(event) {
                    event.preventDefault();
                    if ($('#show_hide_password input').attr("type") == "text") {
                        $('#show_hide_password input').attr('type', 'password');
                        $('#show_hide_password i').addClass("fa-eye-slash");
                        $('#show_hide_password i').removeClass("fa-eye");
                    } else if ($('#show_hide_password input').attr("type") == "password") {
                        $('#show_hide_password input').attr('type', 'text');
                        $('#show_hide_password i').removeClass("fa-eye-slash");
                        $('#show_hide_password i').addClass("fa-eye");
                    }
                });
            });
        </script>
    </section>
    <div class="text-center">
        <label style="color: rgb(190, 190, 190);font-size:12px;">Designed by<span style="color: #004cca">
                <b><a href="" target="_blank">VEGAS</a></b></span></label>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
