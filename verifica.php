<?php
session_start();

$login = $_POST["login"];
$senha = $_POST["senha"];

if ($login=="admin" && $senha=="1234") {
    $_SESSION["autenticado"]=true;

    $html ="
    <!doctype>
    <html>
        <head> <title> Página de verificação </title></head>
        <body>
    
           <script>
    		window.location.replace('https://wricardo.000webhostapp.com/3002/menu.php');
           </script>
      
        </body>
    </html>
    
    ";
    
}else {
    session_destroy();
    $html ="
<!doctype>
<html>
    <head> <title> Página de verificação </title></head>
    <body>

        <h1>Seu login: $login ou sua senha: $senha SÃO INVÁLIDOS</h1><br><br>
  	<h2> Por favor, coloque login e senha VÁLIDA!</h2>
        <a class='btn btn-primary' href='login.html' role='button'>Voltar</a>

    </body>
</html>

";

}

echo $html;

?>