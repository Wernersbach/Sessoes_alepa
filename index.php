<?php
session_start();

require_once './src/controllers/Autenticacao.php';

$mat = isset($_REQUEST['matricula']) ? $mat = $_REQUEST['matricula'] : $mat = '';
$pass = isset($_REQUEST['senha']) ? $pass = $_REQUEST['senha'] : $pass = '';

$authMatricula = Autenticacao::authMat($mat, $pass);

?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Sessões | ALEPA</title>
		<link rel="shortcut icon" href="assets/img/brasao.png" />

	  	<!-- Bootstrap core CSS -->
		<link rel="stylesheet" href="./src/assets/libs/bootstrap-5.0.0-beta2/css/bootstrap.min.css">
		
		<!--FontAwesome-->
		<link href="./src/assets/libs/font-awesome/css/all.css" rel="stylesheet"> <!--load all styles -->

	  	<!--CSS personalizado-->

	  	<!--jsPDF-->
	  	<!--<script type="text/javascript" src="assets/js/jsPDF/jspdf.min.js"></script>-->

	  	<!--Scripts-->

	</head>
	<body>
		<?php
            $token = isset($_SESSION['auth']) ? $token = $_SESSION['auth'] : $token = null;

            if( is_null($token) ){
                include_once './src/views/login.php';
            } else {
                include_once './src/views/dashboard.php';
            }
		?>

	    <script type="text/javascript" src="./src/assets/libs/@popperjs/umd/popper.min.js"></script>
	    <script type="text/javascript" src="./src/assets/libs/bootstrap-5.0.0-beta2/js/bootstrap.min.js"></script>
	</body>
</html>