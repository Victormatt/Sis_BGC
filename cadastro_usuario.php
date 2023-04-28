<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cadastro de Usuário</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    </head>
    <body>
        <div class="container" style="width:400px">
        <div style="text-align:right">
        <a href="cadastro_morador.php" role="button" class="bt btn-primary btn-sm">Votar</a>
</div>
        <h4>Cadastro de Usuário</h4>

        <form class="row g-3" action="_insert_usuario.php" method="post">
            <div class="col-auto">
                <label>Nome do Usuario</label>
                <input type="text" name="nomeusuario" class="form-control" required autocomplete="off" >
            </div>
               <div class="col-auto">
                <label>Email</label>
                <input type="email" name="emailusuario" class="form-control" required autocomplete="off" >
          </div>
              <div class="col-auto">
                <label>Senha</label>
                <input id="txtSenha" type="password" name="senhausuario" class="form-control" required autocomplete="off" >
            </div>
              <div class="col-auto">
                <label>Confirmar Senha</label>
                <input type="password" name="confirmasenha" class="form-control" required autocomplete="off" oninput="validaSenha(this)" >
                <small>Precisa ser igual a senha digitada acima.</small>
           </div>

           <div class="form-group">
               <label> Nivel de Acesso </label>
                   <select name="nivelusuario" class="form-control">
         
            <option value="1"> Administrador </option>
            <option value="2"> Moradores </option>
            <option value="3"> Sindico </option>

        </select>
</div>
<div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">  Cadastrar  </button>
  </div>
</form>



</div>
      
     <script src="https: //code.jquery.com/jquery-3.3.1.slim.min. js" integrity="sha384-q8i/ X+965\-200rT7abK413StQIAqVgRVzpbzoSsmXKp4YfRvH+SabtTE1Pi5jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

   <script>
    function validaSenha(input){
        if (input.value != document.getElementById('txtSenha').value){
            input.setCustomValidity('Repetia a senha corretamente');
        }else{
            input.setCustomValidity('');
        }
    }
   </script>

    </body>
</html>
    
