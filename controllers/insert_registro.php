<!DOCTYPE html>

<html>

<head>
  <title>Insertar</title>
    <link rel="stylesheet" href="../5.1.3/bootstrap.min.css">   		 
    <script src="../5.1.3/bootstrap.bundle.min.js"></script> 
        <style>
         div{
            width:50%;
			position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-49%, -49%);
            }
          
         </style>       
</head>

<body>
<div align="center">
<?php
	$seleccion = $_GET["seleccion"] ;
	$denuncia = $_GET["denuncia"] ;
 
	//echo $denuncia;
	$db_host = "localhost";
	$db_usuario = "cesarplur";
	$db_contra = "cesarplur";
	$db_nombre = "pruebas";

	$connexion = mysqli_connect($db_host,$db_usuario,$db_contra);

	if( mysqli_connect_errno())
		{
			echo "Hubo un problema con la base de datos error al conectar";
			exit() ;
		}
	mysqli_select_db($connexion,$db_nombre) or die ("No se encuentra la Base de datos");

	//mysqli_set_charset($connexion,"utf8");
	$sql = "INSERT INTO denuncias (tipo, denuncia) VALUES  ('$seleccion','$denuncia')";
          
	if(mysqli_query($connexion, $sql)){
			echo "<b>Denuncia Registrada</b>";			
		}else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($connexion);
        }
            mysqli_close($connexion);
			require("enviacorreo.php");
			header("Location: ../index.html");
?>
exit();
<br><br><br>
<input value ="Regresar" class = "btn btn-primary" type = "button" onclick = "javascript:window.location='../index.html'">
<input value ="Ver registros" class = "btn btn-primary" type = "button" onclick = "javascript:window.location='mostrar.php'">
</div>
</body>
</html>
