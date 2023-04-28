<?php
include 'conexao.php';
include 'scripts/password.php';

$nomeusuario = $_POST['nomeusuario'];
$mail = $_POST['mailusuario'];
$senha = $_POST['senhausuario']; 
$nivel = $POST['nivelusuario'];
$status = 'Ativo';

$sql = "INSERT INTO usuarios (nome_usuario,email_usuario,senha_usuario,nivel_usuario,status) values ('$nomeusuario','$email',sha1('$senha'),$nivel,'$status')";


$inserir = mysqli_query($conexao, $sql);
?>
<link rel="stylesheet" href="css/bootstrap.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

      <div class="container" style="width:400px">
      
<center>
      <h3>Usuário adicionado com sucesso</h3>
      <div style=" magin-top:10px">
      <a href="cadastro_usuario.php" class="btn btn-sm btn-warning" style="color:#fff">Votar</a>
</div>
</center>
