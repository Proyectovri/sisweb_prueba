<!doctype html>
<html lang="en">

<head>
  <title>Sisweb</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
   <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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

  
      <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

</head>

<body class="main-body app sidebar-mini light-mode ltr"> 
<div class="page">
        <div class="page-main">

            <!--app header-->
            <div class="app-header header top-header">
                <div class="container-fluid main-container">
                    <div class="d-flex">
                        <div class="dropdown side-nav">
                            <div class="app-sidebar__toggle" data-bs-toggle="sidebar">
                                <a class="open-toggle" href="javascript:void(0)">
                                    <svg class="header-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                                </a>
                                <a class="close-toggle" href="javascript:void(0)">
                                    <svg class="header-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/></svg>
                                </a>
                            </div>
                        </div>
                        <a class="header-brand" href="index.html">
                        </a>
                           <div class="dropdown  header-option">
                            
                        </div>
                        <div class="d-flex order-lg-2 ms-lg-auto">
                            <button class="navbar-toggler navresponsive-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon fe fe-more-vertical "></span>
                            </button>
                            <div class="navbar navbar-expand-lg navbar-nav-right responsive-navbar navbar-dark p-0">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                    <div class="d-flex">
                                        <a href="javascript:void(0)" data-bs-toggle="search" class="nav-link nav-link-lg d-lg-none navsearch">
                                            <svg class="header-icon search-icon" x="1008" y="1248" viewBox="0 0 24 24" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
                                                    <path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                                            </svg>
                                        </a>                                        
                                        <div class="dropdown header-fullscreen">
                                            <a class="nav-link icon full-screen-link" id="fullscreen-button">
                                                <svg class="header-icon" x="1008" y="1248" viewBox="0 0 24 24" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false"><path d="M7,14 L5,14 L5,19 L10,19 L10,17 L7,17 L7,14 Z M5,10 L7,10 L7,7 L10,7 L10,5 L5,5 L5,10 Z M17,17 L14,17 L14,19 L19,19 L19,14 L17,14 L17,17 Z M14,5 L14,7 L17,7 L17,10 L19,10 L19,5 L14,5 Z"></path></svg>
                                            </a>
                                        </div>                                          

                                         <div class="dropdown header-fullscreen">
                                             
                                            <a href="{{ route('logout') }}" class="nav-link icon">
                                                <svg class="header-icon" x="1008" y="1248" viewBox="0 0 24 24" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false"><path d="M0 0h24v24H0V0zm0 0h24v24H0V0z" fill="none"/><path d="M6 20h12V10H6v10zm2-6h3v-3h2v3h3v2h-3v3h-2v-3H8v-2z" opacity=".3"/><path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zM8.9 6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2H8.9V6zM18 20H6V10h12v10zm-7-1h2v-3h3v-2h-3v-3h-2v3H8v2h3z"/>
                                                        </svg>
                                            </a>                             
                                         </div>
                                           
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/app header-->

           <!-- main-sidebar -->
            <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
            <div class="sticky">
                <aside class="app-sidebar sidebar-scroll">
            <!-- Logo en el sidebar inicio -->
                <div class="main-sidebar-header active">
                    <div class="row">
                                <img src="../assets/images/pattern/logos.png" alt="Logo" class="logo" style="width: 150px; position: absolute; left: 50%; transform: translateX(-50%);">    
                    </div>
                </div>
            <!-- Logo en el sidebar fin -->
                    <div class="main-sidemenu">
                        <!-- Foto y nombre del usser inicio -->
                        <div class="app-sidebar__user">
                            <div class="dropdown user-pro-body text-center">
                                <div class="user-pic">
                                    <img alt="user-img" class="avatar avatar-xl brround mb-1" src="../assets/images/users/16.jpg">
                                </div>
                                <div class="user-info text-center">
                                    <h5 class=" mb-1 font-weight-bold"></h5>
                                    <span class="text-muted app-sidebar__user-name text-sm">Euclides Panduro Padilla</span>
                                </div>
                            </div>
                        </div>
                        <!-- Foto y nombre del usser fin -->

                        <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"/></svg>
                        </div>

                        <ul class="side-menu">
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
                                    <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                    <span class="side-menu__label">Gestion</span><i class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Gestion</a></li>
                                    <li><a class="slide-item" href="index.html"><span>Convocatorias</span></a></li>
                                    <li><a class="slide-item" href="index.html"><span>Proyectos</span></a></li>
                                    <li><a class="slide-item" href="{{ ('proyecto') }}"><span>Registrar proyecto</span></a></li>
                                    
                                </ul>
                            </li>
                        </ul>

                        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"/></svg></div>
                    </div>
                </aside>
            </div>
            <!-- main-sidebar -->


            <div class="app-content main-content">
                <div class="side-app">
                    <div class="container-fluid main-container">
                        <br></br>
                        <h2>Bienvenido(a), Euclides Panduro Padilla</h2>
                    <fieldset class="border p-2" style="border: 1px solid #4454C3 !important;">
                        <div>
                        <legend>Presentación de Proyectos</legend>
                            <p>
                                Este es el sistema para presentación de proyectos a los concursos de financiamiento que convoca el Vicerrectorado de Investigación de la Universidad Nacional de Ucayali, facilitando los procesos de inscripción, presentación, sustentación, seguimiento de avances y cierre de los proyectos que resulten ganadores.
                            </p>
                            <p> 
                                Al lado izquierdo tiene el menú de opciones (<svg class="header-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>), el cual deberá revisar uno por uno para usar correctamente el sistema. La información y documentación proporcionada en el sistema queda bajo responsabilidad del docente.
                            </p>
                            <p>
                                <strong>Nota:</strong> En caso de tener algún inconveniente con el sistema, por favor contáctese con nosotros para darle solución inmediatamente.
                            </p>
                            <p>
                                Atte.<br>
                                Soporte SOFIA<br>
                                Vicerrectorado de Investigación<br>
                                Universidad Nacional de Ucayali
                            </p>
                        </div>
                    </fieldset> 
                    @yield('contents')
                    </div>
                </div>
            </div>

            <!-- end app-content-->
        </div>

        <!--Footer-->
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-md-12 col-sm-12 mt-3 mt-lg-0 text-center">
                         Vicerrectorado de Investigación © 2023
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer-->

    </div>
</div>

<!-- Jquery js-->
        <script src="../assets/js/vendors/jquery.min.js"></script>
 <!-- Bootstrap5 js-->
    <script src="../assets/plugins/bootstrap/js/popper.min.js"></script>   

    <!--Othercharts js-->
    <script src="../assets/plugins/othercharts/jquery.sparkline.min.js"></script>

    <!-- Circle-progress js-->
    <script src="../assets/js/vendors/circle-progress.min.js"></script>

    <!-- Jquery-rating js-->
    <script src="../assets/plugins/rating/jquery.rating-stars.js"></script>

    <!-- P-scroll js-->
    <script src="../assets/plugins/p-scrollbar/p-scrollbar.js"></script>

    <!--Sidemenu js-->
    <script src="../assets/plugins/sidemenu/sidemenu.js"></script>

    <!-- Sticky js -->
    <script src="../assets/js/sticky.js"></script>

    <!-- Jquery.steps js -->
    <script src="../assets/plugins/jquery-steps/jquery.steps.min.js"></script>
    <script src="../assets/plugins/parsleyjs/parsley.min.js"></script>

    <!-- Forn-wizard js-->
    <script src="../assets/plugins/formwizard/jquery.smartWizard.js"></script>
    <script src="../assets/plugins/formwizard/fromwizard.js"></script>

    <!--Accordion-Wizard-Form js-->
    <script src="../assets/plugins/accordion-Wizard-Form/jquery.accordion-wizard.min.js"></script>
    <script src="../assets/js/form-wizard.js"></script>
    <script src="../assets/js/form-wizard2.js"></script>

     <!--Select2 js -->
    <script src="../assets/plugins/select2/select2.full.min.js"></script>
    <script src="../assets/js/select2.js"></script>

    <!-- Color Theme js -->
     <script src="../assets/js/themeColors.js"></script>

     <!-- Switcher-Styles js -->
    <script src="../assets/js/switcher-styles.js"></script>

    <!-- Custom js-->
    <script src="../assets/js/custom.js"></script>
  
  
</body>
 @yield('script')
</html>