<?php
switch ($msg) {
    case '1':
        $mensaje="Error de ingreso";
     
    break;
    case '2':
        $mensaje="Acceso no valido";
        
    break;
    case '3':
        $mensaje="Gracias por usar el sistema";
        
        break;
    
    default:
        $mensaje="Ingrese sus datos";
        
        break;
}

?>

<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url();?>/sources/assets/images/favicon.png">
    <title>Adminmart Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>/sources/dist/css/style.min.css" rel="stylesheet">



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative"
           style="background:#D0333A!important">
            <div class="auth-box row">
                <div class="col-lg-7 col-md-5 modal-bg-img" style=" background-image: url('<?php echo base_url();?>/sources/assets/images/bg.jpg')">
                </div>
                <div class="col-lg-5 col-md-7 bg-white">
                    <div class="p-3">
                        <div class="text-center">
                            <img src="<?php echo base_url();?>/sources/assets/images/big/icon.png" alt="wrapkit">
                        </div>
                        <h2 class="mt-3 text-center">BIENVENIDO</h2>

                         <p class="login-box-msg text-center"><?php echo $mensaje; ?></p>


<?php
echo form_open_multipart('usuarios/validarusuario');
?>
                        <form class="mt-4">
                            <div class="row">
                                <div class="col-lg-12">
 

                                    <div class="form-group">
                                        <label class="text-dark" for="uname">Usuario</label>
                                        <input class="form-control" id="uname" type="text" name="Correo"
                                            placeholder="Ingrese su usuario">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="pwd">Contraseña</label>
                                        <input class="form-control" id="pwd" type="password" name="password"
                                            placeholder="ingrese su contraseña">
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <button style="background:#D0333A!important;" type="submit" class="btn btn-block btn-dark">Ingresar</button>
                                </div>

<?php
    echo form_close();
?>

                                <div class="col-lg-12 text-center mt-5">
                                    Olvido su usuario o su contraseña? <a href="#" class="text-danger">Contactese con el administrador</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url();?>/sources/assets/libs/jquery/dist/jquery.min.js "></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url();?>/sources/assets/libs/popper.js/dist/umd/popper.min.js "></script>
    <script src="<?php echo base_url();?>/sources/assets/libs/bootstrap/dist/js/bootstrap.min.js "></script>

   
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
        $(".preloader ").fadeOut();
    </script>
</body>

</html>