<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Aplikasi Peminjaman Ruang</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Stalled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!-- //Meta tag Keywords -->
    <!-- Custom-Files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800" rel="stylesheet">
    <!-- //Fonts -->

</head>

<body>
    <!-- mian-content -->
    <section class="main-content" id="home">
        <div class="layer">
            <!--/Top-Header-->
            
            <!--//Top-Header-->
            <!-- header -->
            <header class="header">
                <div class="container-fluid px-lg-5">
                    <!-- nav -->
                    <nav class="py-4">
                        <div id="logo">
                            <h1> <a href="{{url('/')}}"> </a></h1>
                        </div>

                        <label for="drop" class="toggle">Menu</label>
                        <input type="checkbox" id="drop" />
                        <ul class="menu mt-2">
                            <li class="mr-lg-4 mr-3 active"><a href="#">Home</a></li>
                            <li class="mr-lg-4 mr-3"><a href="#about" class="scroll">About</a></li>
                            @if(Auth::user())
                            <li class="mr-lg-4 mr-3"><a href="{{url('dashboard')}}" class="scroll">Dashboard</a></li>
                            @endif
                            <li class="mr-lg-4 mr-3">
                                <!-- First Tier Drop Down -->
                                <label for="drop-2" class="toggle">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
                                <a href="#">Akun <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                                <input type="checkbox" id="drop-2" />
                                <ul>
                                    @if(!Auth::user())
                                    <li><a href="{{url('login')}}" class="scroll">Login</a></li>
                                    <li><a href="{{url('register')}}" class="scroll">Register</a></li>
                                    @else
                                    <li><a href="{{url('logout')}}" class="scroll">Logout</a></li>
                                    @endif
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <!-- //nav -->
                </div>
            </header>
            <!-- //header -->
            <!-- banner -->
            <div class="banner-info-wthree">
                <h2>
                </h2>
                <h3>Aplikasi pinjam ruang
                </h3>
                <a href="#about" class="learn-link-bnr1 btn">Read More</a>
                <a href="#about" class="scroll">
                    <div class="icon-scroll">
                        <div class="mouse">
                            <div class="wheel"></div>
                        </div>
                        <div class="icon-arrows">
                            <span></span>
                        </div>
                    </div>
                </a>
            </div>
            <!-- //banner -->
            
        </div>
    </section>
    <!--// mian-content -->
    <!--/ab -->
    <section class="about py-5" id="about">
        <div class="container">
            <div class="inner-sec-w3ls-pyt py-lg-5 py-3">
                <h3 class="tittle text-center mb-lg-5 mb-3 px-lg-5"><span class="sub-tittle">About.</span>USER GUIDE</h3>
                <div class="feature-grids row mt-3 mb-lg-5 mb-3 text-center">
                    <div class="col-lg-4">
                        <div class="bottom-gd px-3">
                            <span class="fa fa-building-o" aria-hidden="true"></span>
                            <h3 class="my-4">LOGIN</h3>
                            <p>masukkan email dan password.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="bottom-gd2-active px-3">
                            <span class="fa fa-cogs" aria-hidden="true"></span>
                            <h3 class="my-4">PILIH RUANG YANG KOSONG</h3>
                            <p>agar bisa meminjam ruangan,harus memilih ruangan yang kosong agar bisa dipinjam.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="bottom-gd px-3">
                            <span class="fa fa-cogs" aria-hidden="true"></span>
                            <h3 class="my-4">ISI FORM PEMINJAMAN</h3>
                            <p>masukan data sesuai dengan yang dibutuhkan,jika data sudah valid,selamat anda telah meminjam ruangan.</p>
                        </div>
                    </div>

                </div>
               
        </div>
    </section>
    
    
    <section class="contact py-5" id="contact">
        <div class="container py-lg-5">
            <h3 class="tittle two text-center"><span class="sub-tittle">Find Us</span> Contact Info</h3>
            <div class="text-center">
                <p class="main_p4 mt-4 mb-4 pt-2 text-center mx-auto">Aplikasi ini dibuat oleh : Aji Nugraha Hidayat, Bastomi Maulana Gunawan, dan Cecep Rafqi</p>
            </div>
            <div class="row contact-top">
                <div class="col-lg-6 contact_grid_left">
                    <ul class="list-unstyled">
                        <li>
                            <div class="row">
                                <div class="col-3">
                                    <i class="fa fa-home"></i>
                                </div>
                                <div class="col-9">
                                    <h6>Address</h6>
                                    <p>
                                        <br>UIN Sunan Gunung Djati
                                        <br>Bandung </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-3">
                                    <i class="fa fa-comment"></i>
                                </div>
                                
                            </div>
                        </li>
                        <li class="mt-3">
                            <div class="row">
                                <div class="col-3">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="col-9">
                                    <h6>Email</h6>
                                    <a href="mailto:info@example.com">zieaji55@gmail.com</a>
                                </div>
                            </div>
                        </li>
                        <li class="mt-5">
                            <div class="row">
                                <div class="col-3">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="col-9">
                                    <h6>Phone</h6>
                                    <p>0895347517095</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 contact_grid_right">
                    <form action="#" method="post">
                        <div class="row contact_top">
                            <div class="col-sm-6">
                                <input type="text" name="Name" placeholder="Name" required="">
                            </div>
                            <div class="col-sm-6">
                                <input type="email" name="Email" placeholder="Email" required="">
                            </div>
                        </div>
                        <textarea name="Message" onfocus="this.value='' ;" onblur="if (this.value=='' ) {this.value='Message...' ;}" required="">Message...</textarea>
                        <input type="submit" value="Send">
                        <input type="reset" value="Reset">
                        <div class="clearfix"> </div>
                    </form>
                </div>

            </div>
            <div class="cpy-right-w3layouts-pvt text-center py-5">
                <p class="mb-3">© 2019 Stalled. All rights reserved
                </p>
                <a href="#home" class="move-top scroll"><span class="fa fa-angle-up" aria-hidden="true"></span></a>

            </div>
        </div>
    </section>
    <!-- //contact -->
    <!-- footer -->

    <!-- //footer -->

</body>

</html>
