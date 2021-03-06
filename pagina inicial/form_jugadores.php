<?php
	session_start();
    if(!isset($_SESSION["nombre"]))
        header("Location: sesion.php");
	include_once('conn.php');	
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style.css" rel="stylesheet" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/main.css">
        <link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>        
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <!--Encabezado y menú-->
        <?php include_once("menu.php") ?>

    	<!-- Formulario de registro de jugadores -->
    	<div id="page">
    		<div id="content-other">
                <h3 id="otro" align="center">Alta de jugadores</h3>
                <hr>

    			<div class="datagrid">
    				<form method='post' class="form-horizontal form-label-left" action="bddatos/AltaJugadoresBD.php" enctype="multipart/form-data">
                        <span class="section">
        					<?php
            					if (isset($_SESSION["alerta"])) { ?>
            					   <label class="alerta"><?php echo $_SESSION["alerta"];?></label>
            					<?php unset($_SESSION["alerta"]);
            					}
        					?>
    					</span>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre_empleado">Nombre(s) <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="nombre_empleado" class="form-control col-md-7 col-xs-12" data-validate-length-range="5" data-validate-words="1" name="nombre_empleado" placeholder="" required="required" type="text">
                            </div>
                        </div>
    										
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="apaterno_empleado">Apellido paterno <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="apaterno_empleado" class="form-control col-md-7 col-xs-12" data-validate-length-range="5" data-validate-words="1" name="apaterno_empleado" placeholder="" required="required" type="text">
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="amaterno_empleado">Apellido materno <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="amaterno_empleado" class="form-control col-md-7 col-xs-12" data-validate-length-range="5" name="amaterno_empleado" placeholder="" required="required" type="text">
                            </div>
                        </div>

    				    <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="foto_empleado">Foto <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="foto_empleado" class="form-control col-md-7 col-xs-12"  name="foto_empleado" type="file">
                            </div>
                        </div>
    									
    										
    				    <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="direccion_empleado">Edad <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="edad_empleado" class="form-control col-md-7 col-xs-12" data-validate-length-range="1"  name="edad_empleado" placeholder="" required="required" type="number">
                            </div>
                        </div>
    										
    					<div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email_empleado">Equipo <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">                                
                                <input id="equipo_empleado2" class="form-control col-md-7 col-xs-12" data-validate-length-range="5" name="equipo_empleado2" placeholder="" readonly="readonly" value="<?php echo get_campo('nombreEquipo', 'equipos', 'idEquipo', $_SESSION["equipo"]) ?>" type="text">
                                <input id="equipo_empleado" class="form-control col-md-7 col-xs-12" data-validate-length-range="5" name="equipo_empleado" placeholder="" readonly="readonly" value="<?php echo $_SESSION['equipo'] ?>" type="hidden">
                            </div>
                        </div>
    										
        				<div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="contrasena_empleado">Camiseta <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="camiseta_empleado" class="form-control col-md-7 col-xs-12" data-validate-length-range="1" data-validate-words="1" name="camiseta_empleado" placeholder=""  type="number">
                            </div>
                        </div>

    				    <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="contrasena_empleado2">Tarjetas Rojas <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="tr_empleado2" class="form-control col-md-7 col-xs-12" data-validate-length-range="1"  name="tr_empleado2" placeholder=""  type="number">
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="contrasena_empleado2">Tarjetas Amarillas <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="ta_empleado2" class="form-control col-md-7 col-xs-12" data-validate-length-range="1"  name="ta_empleado2" placeholder=""  type="number">
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="contrasena_empleado2">Goles <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="goles_empleado2" class="form-control col-md-7 col-xs-12" data-validate-length-range="1"  name="goles_empleado2" placeholder=""  type="number">
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="contrasena_empleado2">Autogoles <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="autogoles_empleado2" class="form-control col-md-7 col-xs-12" data-validate-length-range="1"  name="autogoles_empleado2" placeholder=""  type="number">
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="contrasena_empleado2">Posicion <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="posicion_empleado2" class="form-control col-md-7 col-xs-12" data-validate-length-range="1"  name="posicion_empleado2" placeholder=""  type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                                <!--<button type="submit" class="btn btn-primary">Cancelar</button>-->
                                <button id="send" type="submit" class="btn btn-success">Alta</button>
                            </div>
                        </div>
                    </form>
    		    </div>
    	    </div>
        </div>

      	<div id="footer">
		  <p>2016. All rights reserved. Design by <a href="http://detecsa-consultores.com" rel="nofollow">DETECSA</a>.</p>
		</div>

        <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
