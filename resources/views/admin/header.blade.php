<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Online services - Esb Prime serves</title>
    <meta name="description" content="A single window for the most efficient services.The best expression of online service, banking service, tours and travels, and utility payment.">
    <link rel="shortcut icon" href="{{ asset('assets/images/esb2.png') }}">
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
    <meta name="google-site-verification" content="J-QCUNByAQYUlEUZ34YjYS32aOk29Kj3j8KsUEr4aVc" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/custom.css" />
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/rowreorder/1.4.1/js/dataTables.rowReorder.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.4.1/css/rowReorder.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');
    </style>




</head>

<style>
    body {
        font-family: 'Open Sans', sans-serif;
    }

    .card-btn {
        border: none;
        border-radius: 5%;
        width: 100%;
        margin: 5%;
    }

    .header-profile-user {
        width: 30px;
        height: 30px;
    }

    /* .card-img-top {
        max-height: 200px;
    } */

    .btn-secondary.focus,
    .btn-secondary:focus {
        box-shadow: none !important;
    }

    .nav-pills .nav-link {
        border-radius: 1.25rem;
    }

    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
        color: #fff;
        background-color: #004CCA;
        border: solid 2px #004CCA;
    }

    .nav-link {
        display: block;
        padding: 4px 1rem;
        margin: 10px;
        font-weight: 500;
        font-size: 14px;
    }

    .nav-link {
        color: #007bff;
        border: solid 2px;
    }

    .card a {

        text-decoration: none;


        text-align: center;

        /* height: 97px; */
    }

    .card {
        border-radius: 25px;
        /* border: solid 3px #004CCA; */
        overflow: hidden;
        padding: 13px;
        box-shadow: -5px 5px 12px 0px #0000003b;
        overflow: hidden;
    }


    .xc-button {
        -webkit-appearance: button;
        border-radius: 50%;
        border: solid 1px lightgrey;
        padding: 15% 25%;
    }

    .modal-content {
        border-radius: 20px
    }

    .modal-header {

        border-bottom: 0px solid #e9ecef;

    }

    .modal-footer {
        border-top: 0px solid #e9ecef;

    }

    .xc-btn {
        border-color: #004CCA;
        color: #004CCA;
        background-color: #fff;
        border-radius: 25px;
        /* width: 101%; */
        padding: 8% 25%;
        text-align: right;
        font-size: 14px;

    }

    .xc-btn2 {
        border-color: #004CCA;
        color: #004CCA;
        background-color: #fff;
        border-radius: 25px;
        padding: 3px 17px;
        font-weight: 100;
        /* width: 101%; */
        text-align: right;
        font-size: 14px;
    }

    .active1 {
        color: #fff !important;
        background-color: #004CCA !important;
    }

    .xc-btn-parent {
        display: flex;
        align-items: center;
        width: 421px;
        text-align: center;
        flex-direction: row;
        justify-content: space-between;
    }


    .xc-btn:hover {
        color: #fff !important;
        background-color: #004CCA !important;
    }

    .xc-btn2:hover {
        color: #fff !important;
        background-color: #004CCA !important;
    }

    @media only screen and (min-width: 768px) {
        .xc-user-name {
            transform: translateX(-36%);
        }

        .xc-mobile-home {
            display: none;
        }
    }

    @media only screen and (max-width: 767px) {

        .xc-user-name,
        .xc-dashbobard-name {
            display: none
        }

        .px-5 {
            padding-right: 0rem !important;
            padding-left: 0rem !important;
        }



        .xc-btn2 {

            padding: 3px 17px;
        }

        .card {
            border: none;
            overflow: scroll;
            padding: 0px;
            box-shadow: none;
            border-radius: 0%;
        }

        .card-body {

            padding: 0rem;
        }

        /* .xc-btn-parent {
            display: none;
        } */

        .xc-mobile-home {
            display: block;
        }

    }

    .form-control {

        border-radius: 1rem;

    }

    .btn-info {
        color: #fff;
        background-color: #6c88b7 !important;
        border-color: #6c88b7 !important;
    }

    .form-switch .form-check-input:checked+.form-check-label::before {
        transform: scaleX(1.5);
        /* Increase the width of the switch button */
        width: 1.5rem;
        /* Adjust the width */
        height: 1.5rem;
        /* Adjust the height to maintain aspect ratio */
    }

    .navs-link {

        padding: 4px 1rem;


        border-radius: 1.25rem;
        color: #007bff;
        border: solid 2px;
        text-decoration: none;
    }



    .navs-link:hover {
        color: #fff !important;
        background-color: #004CCA !important;
    }
</style>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <nav class="navbar navbar-light"
            style="border-radius:45px;margin:1%;background-color:##fff;box-shadow: -5px 5px 12px 0px #0000003b;">
            <div>
                <a class="navbar-brand" href="#">

                    <img src="{{ asset('assets/img/vegas/Outlook-cexf32zv.png') }}"
                        style="height:40px;
                    width: 200px;" class="d-inline-block align-top"
                        alt="">

                </a>
            </div>

            <div class="dropdown d-inline-block">

                <button type="button" class="xc-dashbobard-name btn header-item waves-effect" style="color: #000;"
                    aria-haspopup="true" aria-expanded="false">
                    {{ auth()->user()->name }}</button>
                <div class="btn-group">
                    <button type="button" onclick="logout()" class="btn btn-secondary"
                        style="background: transparent;border: none;color: black;">

                        <i style="color: #000;font-size: 20px;" class="bi bi-box-arrow-right"></i>
                    </button>

                    <script>
                        function logout() {
                            Swal.fire({
                                title: 'Are you sure?',
                                text: 'You will be logged out.',
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonText: 'Yes',
                                cancelButtonText: 'No',
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    location.href = "{{ route('logout') }}";
                                }
                            });
                        }
                    </script>

                </div>
            </div>
        </nav>

        <div class="container-fluid">
