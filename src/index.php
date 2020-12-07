<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Booster is a Responsive Bootstrap & Laravel Admin Dashboard Template">
    <meta name="keywords" content="admin, admin template, admin panel, dashboard template, laravel, ui kits, web app, crm, cms, responsive, bootstrap 4, html, sass support, scss">
    <meta name="author" content="Themesbox">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

    <title>Tutoria - formato 3_2a9</title>

    <!-- Fevicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Start CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <!-- End CSS -->

</head>

<body class="xp-horizontal">

    <!-- Start XP Container -->
    <div id="xp-container">

        <!-- Start XP Rightbar -->
        <div class="xp-rightbar">

            <!-- Start XP Headerbar -->
            <div class="xp-headerbar">

                <!-- Start XP Topbar -->
                <div class="xp-topbar" style="background-color: #7a94ca; ">

                    <!-- Start XP Row -->
                    <div class="row"> 

                        <!-- Start XP Col -->
                        <div class="col-3 col-md-2 col-lg-2 order-1 order-md-1 align-self-center">
                            <!-- Start XP Logobar -->
                            <div class="xp-logobar">
                                <a href="index.html" class="xp-small-logo"><img src="assets/images/logo.png" class="img-fluid" alt="logo"></a>
                                <a href="index.html" class="xp-main-logo"><img src="assets/images/logo.png" class="img-fluid" alt="logo"></a>
                            </div>                        
                            <!-- End XP Logobar -->
                        </div> 
                        <!-- End XP Col -->

                        <!-- Start XP Col -->
                        <div class="col-12 col-md-5 col-lg-3 order-3 order-md-2">
                            <div class="xp-searchbar">
                                <form>
                                </form>
                            </div>
                        </div>
                        <!-- End XP Col -->

                        <!-- Start XP Col -->
                        <div class="col-9 col-md-5 col-lg-7 order-2 order-md-3">
                            <div class="xp-profilebar text-right">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item mr-0">
                                        <div class="dropdown xp-userprofile">
                                            <a class="dropdown-toggle user-profile-img" href="#" role="button" id="xp-userprofile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/Teacher.png" alt="user-profile" class="rounded-circle img-fluid"><span class="xp-user-live"></span></a>

                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="xp-userprofile">
                                                <a class="dropdown-item" href="#">Bienvenido, John Doe</a>
                                                <a class="dropdown-item" href="#"><i class="mdi mdi-logout mr-2"></i> Cerrar Sesión</a>
                                            </div>
                                        </div>                                   
                                    </li>
                                    <li class="list-inline-item xp-horizontal-menu-toggle">
                                        <button type="button" class="navbar-toggle bg-transparent" data-toggle="collapse" data-target="#navbar-menu">
                                            <i class="mdi mdi-sort-variant font-24 text-white"></i>
                                        </button>                                   
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End XP Col -->

                    </div> 
                    <!-- End XP Row -->

                </div>
                <!-- End XP Topbar -->

                <!-- Start XP Breadcrumbbar -->                    
                <div class="xp-breadcrumbbar text-center" style="background-color: #7a94ca; ">
                    <h4 class="page-title">Tutoría</h4>  
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" style="color: black;">Tutoría</a></li>
                        <li class="breadcrumb-item"><a href="#" style="color: black;">Formatos</a></li>
                        <li class="breadcrumb-item active" aria-current="page" style="color: black;">Forma 3_2a9</li>
                      </ol>                
                </div>
                <!-- End XP Breadcrumbbar -->        

                <!-- Start XP Menubar -->                    
                <div class="xp-menubar text-left">

                    <!-- Start XP Nav -->
                    <nav class="xp-horizontal-nav xp-mobile-navbar xp-fixed-navbar">

                        <div class="collapse navbar-collapse" id="navbar-menu">
                          <ul class="xp-horizontal-menu">

                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-home"></i><span>Inicio</span></a>
                              <ul class="dropdown-menu">
                                <li><a href="index.html">Inicio</a></li>
                              </ul>
                            </li>
                            <li class="scroll"><a href="events.html"><i class="fa fa-file-text-o"></i><span>Formatos</span></a></li>
                             
                          </ul>
                        </div>

                    </nav>
                    <!-- End XP Nav -->

                </div>
                <!-- End XP Menubar -->

            </div>
            <!-- End XP Headerbar -->
            
            <!-- Start XP Contentbar -->    
            <div class="xp-contentbar">

                <!-- Start XP Row -->
                <div class="row">

                    <!-- Start XP Col -->
                    <div class="col-lg-12">
                        <div class="card m-b-30">

                            <div class="card-header bg-white">
                                <h5 class="card-title text-black">Reporte global por estudiante</h5>
                            </div>

                            <div class="card-body">

                                <form action="conexion.php" method="post" class="needs-validation" novalidate>
                                  <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                      <label for="nombre">Nombre del estudiante</label>
                                      <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" required>
                                      <div class="invalid-feedback">
                                        Por favor complete este campo.
                                      </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                      <label for="carrera">Carrera</label>
                                      <select class="xp-select2-single form-control" name="carrera" id="carrera">
                                        <option>Select</option>
                                          <option value="ITI">ITI</option>
                                          <option value="ITEM">ITEM</option>
                                          <option value="ITI">ISTI</option>
                                          <option value="ITEM">ITMA</option>
                                          <option value="ITI">LAG</option>
                                          <option value="ITEM">LMI</option>
                                      </select>
                                      <div class="valid-feedback">
                                        ¡Bien!
                                      </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                      <label for="promedio">Promedio al tercer parcial</label>
                                      <input type="text" class="form-control" name="promedio" id="promedio" placeholder="Promedio"  required>
                                      <div class="invalid-feedback">
                                        Por favor complete este campo.
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                      <label for="1">Evalúe  y describa el logro de los compromisos establecidos por el Tutor y Tutelado, desde el inicio del semestre, analizando el alcance de sus metas obtenidas.</label>
                                      <textarea class="form-control" maxlength="700" rows="3" name="p1" id="1" placeholder="Máximo 700 caracteres." required></textarea>
                                      <div class="invalid-feedback">
                                        Por favor complete este campo.
                                      </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                      <label for="2">Describa el tipo de apoyo y orientación que requirió el estudiante el durante todo el semestre (problemas con su desempeño académico, personales, familiares o laborales,normatividad académica, hábitos de estudio, proyecto de vida, etc.) Nota: Puede recuperar información del punto 8 del formato de seguimiento individual permanente.</label>
                                      <textarea class="form-control" maxlength="700" rows="3" name="p2" id="2" placeholder="Máximo 700 caracteres." required></textarea>
                                      <div class="invalid-feedback">
                                        Por favor complete este campo.
                                      </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                      <label for="3">Explique las acciones y procedimientos que el estudiante seguirá en cuanto a la preparación de los exámenes finales, extraordinarios y de regularización.</label>
                                      <textarea class="form-control" maxlength="700" rows="3" name="p3" id="3" placeholder="Máximo 700 caracteres." required></textarea>
                                      <div class="invalid-feedback">
                                        Por favor complete este campo.
                                      </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                      <label for="4">Enuncie los resultados finales del tutelado (en términos cuantitativos y cualitativos) en este semestre.</label>
                                      <textarea class="form-control" maxlength="700" rows="3" name="p4" id="4" placeholder="Máximo 700 caracteres." required></textarea>
                                      <div class="invalid-feedback">
                                        Por favor complete este campo.
                                      </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                      <label for="5">Realice un pronóstico académico integral del estudiante, considerando el conocimiento que se tiene sobre este y las potencialidades en vías de desarrollo.</label>
                                      <textarea class="form-control" maxlength="700" rows="3" name="p5" id="5" placeholder="Máximo 700 caracteres." required></textarea>
                                      <div class="invalid-feedback">
                                        Por favor complete este campo.
                                      </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                      <label for="6">Metas para el próximo semestre y proyecto de vida.</label>
                                      <textarea class="form-control" maxlength="700" rows="3" name="p6" id="6" placeholder="Máximo 700 caracteres." required></textarea>
                                      <div class="invalid-feedback">
                                        Por favor complete este campo.
                                      </div>
                                    </div>
                                  </div>
                                  <button class="btn btn-primary" type="submit">Finalizar Tutoría</button>
                                </form>

                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    


                </div>   
                <!-- End XP Row -->

            </div>
            <!-- End XP Contentbar -->

            <!-- Start XP Footerbar -->
            <div class="xp-footerbar">
                <footer class="footer">
                    <p class="mb-0">© 2019 Booster - Designed with <i class="mdi mdi-heart-multiple text-danger"></i> by xPanther Solutions.</p>
                </footer>
            </div>
            <!-- End XP Footerbar -->

        </div>
        <!-- End XP Rightbar -->

    </div>
    <!-- End XP Container -->

    <!-- Start JS -->        
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/modernizr.min.js"></script>
    <script src="assets/js/detect.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/horizontal-menu.js"></script>

    <!-- Parsley JS -->
    <script src="assets/plugins/validatejs/validate.min.js"></script>

    <!-- Validate JS -->
    <script src="assets/js/init/validate-init.js"></script>
    <script src="assets/js/init/form-validation-init.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
    <!-- End JS -->

</body>
</html>