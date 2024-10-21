<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MyCoffee</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/css/style.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
            <a href="/" class="navbar-brand px-lg-4 m-0">
                <h1 class="m-0 display-4 text-uppercase text-white">MyCoffee</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4">
                    <a href="/" class="nav-item nav-link ">Home</a>
                    <a href="/#about" class="nav-item nav-link">About</a>
                    <a href="menu.html" class="nav-item nav-link">Menu</a>
                    <a href="/signup" class="nav-item nav-link active">Signup</a>
                    <a style="cursor: pointer" class="nav-item nav-link" data-target="#loginAccountModal"
                        data-toggle="modal">Login</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5"
            style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Signup</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="/">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Signup</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form action="/" method="post">
                        @csrf
                        <div class="form-group mt-2">
                            <label for="firstName" class="text-dark">First Name:</label>
                            <br>
                            <input required type="text" name="firstName" id="" class="form-control">
                        </div>
                        <div class="form-group mt-2">
                            <label for="middleName" class="text-dark">Middle Name:</label>
                            <br>
                            <input type="text" name="middleName" id="" class="form-control">
                        </div>
                        <div class="form-group mt-2">
                            <label for="lastName" class="text-dark">Last Name:</label>
                            <br>
                            <input required type="text" name="lastName" id="" class="form-control">
                        </div>
                        <div class="form-group mt-2">
                            <label for="address" class="text-dark">Address:</label>
                            <br>
                            <textarea required name="address" id="" cols="30" rows="5" class="form-control">
        
                            </textarea>
                        </div>
                        <div class="form-group mt-2">
                            <label for="birthDate" class="text-dark">Birth Date:</label>
                            <br>
                            <input required type="date" name="birthDate" id="" class="form-control">
                        </div>
                        <div class="form-group mt-2">
                            <label for="gender" class="text-dark">Gender:</label>
                            <br>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="radio" name="gender" value="male"
                                            aria-label="Radio button for selecting male">
                                    </div>
                                </div>
                                <span class="text-dark" style="margin-left: 5px;">Male</span>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="radio" name="gender" value="female"
                                            aria-label="Radio button for selecting female">
                                    </div>
                                </div>
                                <span class="text-dark" style="margin-left: 5px;">Female</span>
                            </div>
                        </div>

                        <div class="form-group mt-2">
                            <label for="phoneNumber" class="text-dark">Phone Number:</label>
                            <br>
                            <input required type="number" name="phoneNumber" id="" class="form-control">
                        </div>
                        <div class="form-group mt-2">
                            <label for="username" class="text-dark">Username:</label>
                            <br>
                            <input required type="text" name="username" id="" class="form-control">
                        </div>
                        <div class="form-group mt-2">
                            <label for="password" class="text-dark">Password:</label>
                            <br>
                            <input required type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="form-group mt-2">
                            <label for="confimpass" class="text-dark">Confirm Password:</label>
                            <br>
                            <input required type="password" name="confimpass" id="confimpass" class="form-control">
                        </div>
                        <div class="form-group mt-2">
                            <input type="checkbox" id="showPassword" onclick="togglePasswordVisibility()">
                            <label for="showPassword" class="text-dark">Show Password</label>
                        </div> <button type="submit" class="btn btn-primary" name="btnCreateAccount"
                            value="yes">Proceed</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid footer text-white mt-5 pt-5 px-0 position-relative overlay-top">
        <div class="row mx-0 pt-5 px-sm-3 px-lg-5 mt-4">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Get In Touch</h4>
                <p><i class="fa fa-map-marker-alt mr-2"></i>123 Street, New York, USA</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
                <p class="m-0"><i class="fa fa-envelope mr-2"></i>info@example.com</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Follow Us</h4>
                <p>Amet elitr vero magna sed ipsum sit kasd sea elitr lorem rebum</p>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i
                            class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square" href="#"><i
                            class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Open Hours</h4>
                <div>
                    <h6 class="text-white text-uppercase">Monday - Friday</h6>
                    <p>8.00 AM - 8.00 PM</p>
                    <h6 class="text-white text-uppercase">Saturday - Sunday</h6>
                    <p>2.00 PM - 8.00 PM</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Newsletter</h4>
                <p>Amet elitr vero magna sed ipsum sit kasd sea elitr lorem rebum</p>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 25px;"
                            placeholder="Your Email">
                        <div class="input-group-append">
                            <button class="btn btn-primary font-weight-bold px-3">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid text-center text-white border-top mt-4 py-4 px-sm-3 px-md-5"
            style="border-color: rgba(256, 256, 256, .1) !important;">
            <p class="mb-2 text-white">Copyright &copy; <a class="font-weight-bold" href="#">MyCoffee</a>. All
                Rights Reserved.</a></p>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i
            class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="/lib/easing/easing.min.js"></script>
    <script src="/lib/waypoints/waypoints.min.js"></script>
    <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/lib/tempusdominus/js/moment.min.js"></script>
    <script src="/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="/lib//jqBootstrapValidation.min.js"></script>
    <script src="/lib//contact.js"></script>

    <!-- Template Javascript -->
    <script src="/js/main.js"></script>

    <div class="modal fade" id="loginAccountModal" tabindex="-1" role="dialog"
        aria-labelledby="loginAccountModalTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginAccountModalTitle">Login Your Account</h5>
                    <button type="button" class="btn btn-outline-dark close" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/" method="post" autocomplete="off">
                    @csrf
                    <div class="modal-body">

                        <div class="form-group mt-2">
                            <label for="username" class="text-dark">Username:</label>
                            <br>
                            <input required type="text" name="username" id="" class="form-control">
                        </div>
                        <div class="form-group mt-2">
                            <label for="password" class="text-dark">Password:</label>
                            <br>
                            <input required type="password" name="password" id="password2" class="form-control">
                        </div>
                        <div class="form-group mt-2">
                            <input type="checkbox" id="showPassword2" onclick="togglePasswordVisibility2()">
                            <label for="showPassword" class="text-dark">Show Password</label>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="btnLogin"
                            value="yes">Proceed</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function togglePasswordVisibility() {
            var passwordField = document.getElementById("password");
            var confirmPasswordField = document.getElementById("confimpass");
            if (passwordField.type === "password" && confirmPasswordField.type === "password") {
                passwordField.type = "text";
                confirmPasswordField.type = "text";
            } else {
                passwordField.type = "password";
                confirmPasswordField.type = "password";
            }
        }

        function togglePasswordVisibility2() {
            var passwordField = document.getElementById("password2");
            if (passwordField.type === "password") {
                passwordField.type = "text";
            } else {
                passwordField.type = "password";
            }
        }
    </script>
    @if (session()->pull('successCreateAccount'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Created Account',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('successCreateAccount') }}
    @endif
    @if (session()->pull('errorCreateAccount'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Failed To Create Account, Please Try Again Later',
                    showConfirmButton: true,
                });
            }, 500);
        </script>
        {{ session()->forget('errorCreateAccount') }}
    @endif
    @if (session()->pull('errorPasswordNotMatch'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Password Doesn\'t Match, Please Try Again',
                    showConfirmButton: true,
                });
            }, 500);
        </script>
        {{ session()->forget('errorPasswordNotMatch') }}
    @endif
    @if (session()->pull('wrongUsernameOrPass'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Wrong Username or Password',
                    showConfirmButton: true,
                });
            }, 500);
        </script>
        {{ session()->forget('wrongUsernameOrPass') }}
    @endif
</body>

</html>
