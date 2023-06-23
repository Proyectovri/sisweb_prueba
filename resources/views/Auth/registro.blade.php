<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta content="Dashtic - Bootstrap Webapp Responsive Dashboard Simple Admin Panel Premium HTML5 Template" name="description">
    <meta content="Spruko Technologies Private Limited" name="author">
    <meta name="keywords" content="admin, admin template, dashboard, admin dashboard, bootstrap 5, responsive, clean, ui, admin panel, ui kit, responsive admin, application, bootstrap 4, flat, bootstrap5, admin dashboard template"/>

    <!-- Title -->
    <title>Dashtic - Bootstrap Webapp Responsive Dashboard Simple Admin Panel Premium HTML5 Template</title>

    <!--Favicon -->
    <link rel="icon" href="../assets/images/brand/favicon.ico" type="image/x-icon"/>

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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</head>

<body class="main-body light-mode ltr page-style1 error-page">

    <div class="page">
        <div class="">
            <div class="row justify-content-center mt-7 mt-sm-0">
                <div class="col-lg-9 col-xl-8">
                    <div class="card-group mb-0">
                        <div class="card p-4 page-content">
                            <div class="card-body page-single-content">
                                <div class="w-100">
                                <h1 class="mb-2" align="center">Registra Usuario</h1>                               
                                    <div class="body">
                                        <form action="{{ route('registrar')}}" class="form-horizontal" method="post" >
                                             @csrf
                                              <fieldset class="border p-2">
                                                    <legend  class="float-none w-auto p-2 form-label">
                                                        Datos Personales
                                                    </legend>
                                            <div class="mb-3 row">
                                                <label for="inputName" class="col-md-2 form-label">DNI</label>
                                                <div class="col-md-4">
                                                     <input id="dni" name="dni" type="text" class="form-control numbersonly" value="" required="" maxlength="8" >
                                                </div>
                                                 <label for="inputName" class="col-md-2 form-label ">Nombre</label>
                                                <div class="col-md-4">
                                                     <input id="nombre" name="nombre" type="text" class="form-control UpperCase" value="" required="">
                                                </div>
                                            </div>

                                             <div class="mb-3 row">
                                                <label for="inputName" class="col-md-2 form-label">Apellidos</label>
                                                <div class="col-md-4">
                                                     <input id="apellidos" name="apellidos" type="text" class="form-control UpperCase" value="" required="">
                                                </div>
                                                 <label for="inputName" class="col-md-2 form-label">celular</label>
                                                <div class="col-md-4">
                                                     <input id="celular" name="celular" type="text" class="form-control numbersonly" placeholder="" required="" maxlength="9">
                                                </div>
                                            </div>                                            
                                             </fieldset>
                                             <fieldset class="border p-2">
                                                    <legend  class="float-none w-auto p-2 form-label">
                                                        Datos Academicos
                                                    </legend>
                                            <div class="mb-3 row">
                                                <label for="inputName" class="col-md-2 form-label">Escuela</label>
                                                <div class="col-md-4">
                                                     <select id="escuela" name="escuela" class="form-control form-select select2">
                                                                 @foreach ($carreras as $escu)
                                                                    <option value="{{  $escu->PK_Carrera }}">{{  $escu->Carr_Nombre }}</option>
                                                                    @endforeach
                                                            </select>
                                                </div>
                                                 <label for="inputName" class="col-md-2 form-label">Correo Institucional</label>
                                                <div class="col-md-4">
                                                      <input id="correo" name="correo" type="email" class="form-control" value="" required="">
                                                </div>
                                            </div>

                                             <div class="mb-3 row">
                                                <label for="inputName" class="col-md-2 form-label">Grado Academico</label>
                                                <div class="col-md-4">
                                                     <select name="grado" id="grado" class="form-control form-select select2">
                                                               @foreach ($gradosacademicos as $grado)
                                                                    <option value="{{  $grado->PK_GradoAcademico }}">{{  $grado->Gaca_Abreviatura }}</option>
                                                                    @endforeach
                                                            </select>
                                                </div>
                                                 <label for="inputName" class="col-md-2 form-label">Mencion</label>
                                                <div class="col-md-4">
                                                      <input id="mencion" name="mencion" type="text" class="form-control UpperCase" placeholder="">
                                            </div>                                            
                                             </fieldset>
                                            <div class="mb-0 mt-4 row justify-content-center">
                                                <div class="col-6">
                                                   <div class="text-center pt-1 mb-5 pb-1">
                                                    <button type="submit" class="btn btn-lg btn-primary btn-block" type="button"><i class="fe fe-save"></i>Registrar</button>
                                                </div>  
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                    <div class="text-center pt-4">
                        <div class="font-weight-normal fs-16">You Already have an account <a class="btn-link font-weight-normal" href="login-3.html">Login Here</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        // Initialize our function when the document is ready for events.
        jQuery(document).ready(function(){
            // Listen for the input event.
            
            $(".numbersonly").on("input", function (evt) {
               jQuery(this).val(jQuery(this).val().replace(/[^0-9]/g, ''));
             })

            $(".UpperCase").on("keypress", function () {
              $input=$(this);
              setTimeout(function () {
               $input.val($input.val().toUpperCase());
              },50);
             })
        });
        </script>

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

    <!--Select2 js -->
    <script src="../assets/plugins/select2/select2.full.min.js"></script>
    <script src="../assets/js/select2.js"></script>


</body>
</html>
