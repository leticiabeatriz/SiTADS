<!DOCTYPE html>
<?php

	$servername = "localhost";
	$username = "einfonc";
	//$password = "5syUf6gmye8qNx";
	$dbname = "einfonc";
		
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    if(!$conn) {
        die("Connection fail: ".mysqli_connect_error());
    }
    
    if(isset($_POST['btn_login'])) {
        $email = $_POST['email'];
        $senha = $_POST['senha'];
		
		mysqli_set_charset($conn, 'utf8');
		
        $p_table_name = "participante";
		$p_id = "email";
		$p_password = "senha";
        
		$p_nome = "nome";
		$p_inst = "instituto";
		$p_curso = "curso";
		$p_tipo = "tipo";
		$p_cpf = "cpf";
		$p_area = "area";
		$p_avaliador = "avaliador";
		$p_permissions = "permissions";
		
		$p_sql = "SELECT * FROM ".$p_table_name." WHERE ".$p_id." = '".$email."';";
		$p_result = mysqli_query($conn, $p_sql);
        
        if(mysqli_error($conn)) {
            session_start();
            session_destroy();
			header('Location: ../painel/error_login.php');
		} else {
            if(mysqli_num_rows($p_result) > 0) {
                while($p_row = mysqli_fetch_assoc($p_result)) {
                    
                    $senha = base64_encode($senha);
                    
                    if($p_row[$p_password] == $senha) {
                        
                        session_start();
                        session_reset();
                        
                        $tipo = $p_row[$p_tipo];
                        $nome = $p_row[$p_nome];
                        $curso = $p_row[$p_curso];
                        $inst = $p_row[$p_inst];
                        $cpf = $p_row[$p_cpf];
                        $area = $p_row[$p_area];
                        $avaliador = $p_row[$p_avaliador];
                        $permissions = $p_row[$p_permissions];
                        
                        $_SESSION['nome'] = $nome;
                        $_SESSION['email'] = $email;
                        $_SESSION['senha'] = $senha;
                        $_SESSION['curso'] = $curso;
                        $_SESSION['inst'] = $inst;
                        $_SESSION['cpf'] = $cpf;
                        $_SESSION['area'] = $area;
                        $_SESSION['avaliador'] = $avaliador;
                        $_SESSION['permissions'] = $permissions;
                        
                        header('Location: ../painel/index.php'); 
                    } else {
                        session_start();
                        session_destroy();
                        header('Location: ../painel/error_login.php');
                    }
                }
            } else {
                session_start();
                session_destroy();
                header('Location: ../painel/error_login.php');
            }
		}
        
    } elseif(isset($_POST['btn_logout'])) {
        session_start();
        session_destroy();
        header('Location: ../index.php');
    } elseif(isset($_POST['btn_super'])) {
        $_user = $_POST['user'];
        $_pass = $_POST['senha'];

        $adm_table_name = "admins";
        $adm_id = "_user";
        $adm_senha = "senha";
        $adm_nome = "nome";

        $adm_sql = "SELECT * FROM $adm_table_name WHERE $adm_id = '".$_user."';";
        $adm_res = mysqli_query($conn, $adm_sql);

        session_start();
        session_reset();
        
        if(!mysqli_error($conn)) {
            if($rows = mysqli_fetch_assoc($adm_res)) {
                $nome = $rows[$adm_nome];
                
                if($_pass == base64_decode($rows[$adm_senha])) {
                    
                    $_SESSION['SUPER'] = TRUE;
                    $_SESSION['nome'] = $nome;
                    $_SESSION['user'] = $_user;
                    $_SESSION['senha'] = base64_encode($_pass);

                    header("Location: ../admin/index.php");
                } else {
                    $_SESSION['ERROR_SUPER'] = TRUE;
                    header("Location: ../index.php");
                }
                
            } else {
                
            $_SESSION['ERROR_SUPER'] = TRUE;
            header("Location: ../admin/index.php");
            }
        } else {
            $_SESSION['ERROR_SUPER'] = TRUE;
            header("Location: ../admin/index.php");
        }
    }

?>

<html>
    <head>
        <title>5ª Semana de Química</title>
        <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<meta charset="utf-8"></meta><link rel="stylesheet" href="../css/styles.css" type="text/css" />
		<link rel="stylesheet" href="../css/bootstrap.css"  type="text/css">
		<link rel="stylesheet" href="../css/i_styles.css"  type="text/css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"></meta>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="user-scalable=no,width=device-width, initial-scale=1, maximum-scale=1" />
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="HandheldFriendly" content="True"> 
		<meta name="MobileOptimized" content="320">
		<meta name="author" content="Victor R. Vieira Rodrigues" />
		<meta name="robots" content="index, follow" />
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="format-detection" content="telephone=no" />
		<link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
		
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		<script type="text/javascript" src="../js/bootstrap.js"></script>
    </head>
    
    <body>
		<div id="loader" class="loader"></div>
    </body>
</html>