<!doctype html>
<html lang="en">

<head>
    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>

    <!-- Title -->
    <title>Iniciar Sesión</title>

    <!--Favicon -->
    <link rel="icon" href="../assets/images/brand/favicon.ico" type="image/x-icon" />

    <!-- Bootstrap css -->
    <link id="style" href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Style css -->
    <link href="../assets/css/style.css" rel="stylesheet" />

    <!-- Plugin css -->
    <link href="../assets/css/plugin.css" rel="stylesheet" />

    <!-- Animate css -->
    <link href="../assets/css/animated.css" rel="stylesheet" />

    <!---Icons css-->
    <link href="../assets/plugins/web-fonts/icons.css" rel="stylesheet" />
    <link href="../assets/plugins/web-fonts/font-awesome/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/plugins/web-fonts/plugin.css" rel="stylesheet" />

</head>

<body class="main-body light-mode ltr page-style1 error-page">
    <header>
        <img src="../assets/images/pattern/logos.png" alt="Logo" class="logo">
    </header>
    <div class="page">
        <div class="page-single p-5">
            <div class="row justify-content-center mt-7 mt-sm-0">
                <div class="col-lg-9 col-xl-8">
                    <div class="card-group mb-0">
                        <div class="card p-4 page-content">
                            <div class="card-body page-single-content">
                                <div class="w-100">
                                    <form method="POST" action="{{route('login')}}">
                                        @csrf
                                        <div class="">
                                            <h1 class="mb-2">Bienvenido</h1>
                                            <p class="text-muted">Ingresa a tu cuenta</p>
                                        </div>
                                        <hr class="my-5">

                                        <div class="input-group mb-3">
                                            <span class="input-group-addon"><svg class="svg-icon"
                                                    xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                                    width="24">
                                                    <path d="M0 0h24v24H0V0z" fill="none" />
                                                    <path d="M12 16c-2.69 0-5.77 1.28-6 2h12c-.2-.71-3.3-2-6-2z"
                                                        opacity=".3" />
                                                    <circle cx="12" cy="8" opacity=".3" r="2" />
                                                    <path
                                                        d="M12 14c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4zm-6 4c.22-.72 3.31-2 6-2 2.7 0 5.8 1.29 6 2H6zm6-6c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0-6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2z" />
                                                </svg></span>
                                            <input type="email" name="Usua_Correo"
                                                class="form-control @error('Usua_Correo') is-invalid @enderror"
                                                placeholder="Correo institucional" required>

                                            @error('Usua_Correo')
                                            <div class="invalid-feedback">
                                                Correo institucional inválido
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="input-group mb-4">
                                            <span class="input-group-addon"><svg class="svg-icon"
                                                    xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                                    width="24">
                                                    <g fill="none">
                                                        <path d="M0 0h24v24H0V0z" />
                                                        <path d="M0 0h24v24H0V0z" opacity=".87" />
                                                    </g>
                                                    <path
                                                        d="M6 20h12V10H6v10zm6-7c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2z"
                                                        opacity=".3" />
                                                    <path
                                                        d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zM9 6c0-1.66 1.34-3 3-3s3 1.34 3 3v2H9V6zm9 14H6V10h12v10zm-6-3c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2z" />
                                                </svg></span>
                                            <input type="password" name="Usua_Clave"
                                                class="form-control @error('Usua_Clave') is-invalid @enderror"
                                                placeholder="Contraseña" required>

                                            @error('Usua_Clave')
                                            <div class="invalid-feedback">
                                                Contraseña inválida
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a href="#" class="btn btn-link box-shadow-0 px-0">¿Olvidaste tu
                                                    contraseña?</a>
                                            </div>
                                            <div class="col-12">
                                                <div class="text-center pt-1 pb-1">
                                                    <button type="submit" class="btn btn-lg btn-primary btn-block"
                                                        type="button"><i class="fe fe-arrow-right"></i>Iniciar
                                                        Sesión</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-4">
                                            <div class="font-weight-normal fs-16">¿No tienes una cuenta? <a
                                                    class="btn-link font-weight-normal"
                                                    href="{{ route('registrar')}}"><b>Registrate Aqui</b></a></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card text-white bg-primary py-5 d-none d-lg-block page-content mt-0">
                            <div class="card-body text-center justify-content-center page-single-content">
                                <img src="../assets/images/pattern/login.png" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="text-center pt-4">
                        <div class="font-weight-normal fs-16">Vicerrectorado de Investigacion © 2023</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery js-->
    <script src="../assets/js/vendors/jquery.min.js"></script>

    <!-- Bootstrap5 js-->
    <script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!--Othercharts js-->
    <script src="../assets/plugins/othercharts/jquery.sparkline.min.js"></script>

    <!-- Circle-progress js-->
    <script src="../assets/js/vendors/circle-progress.min.js"></script>

    <!-- Jquery-rating js-->
    <script src="../assets/plugins/rating/jquery.rating-stars.js"></script>

    <!-- P-scroll js-->
    <script src="../assets/plugins/p-scrollbar/p-scrollbar.js"></script>

    <!-- Color Theme js -->
    <script src="../assets/js/themeColors.js"></script>

    <!-- Switcher-Styles js -->
    <script src="../assets/js/switcher-styles.js"></script>

    <!-- Custom js-->
    <script src="../assets/js/custom.js"></script>

</body>

</html>