<?php
 include("config.php");

 if(isset($_POST['email']) || isset($_POST['senha'])) {
  if(strlen($_POST['email']) == 0  ) {
    echo "Preencha seu e-mail";
  } else if(strlen($_POST['senha']) == 0 ){
    echo "Preencha sua senha";
  } else {
    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['senha']);
    
    $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $sql__query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

    $quantidade = $sql__query->num_rows;

    if($quantidade == 1){
     
     $login= $sql__query->fetch_assoc();
   
     if(!isset($_SESSION)) {
      session_start();
    }
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    header("Location: painel.php");




    header("location: painel.php");
    } else {
      echo "Falha ao logar! E-mail ou senha incorretos";
    }
    
   

      

  }


 }
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
    <section class="vh-100" style="background-color: #F0FFFF;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                  <div class="col-md-6 col-lg-5 d-none d-md-block">
                    <img src="tccorporation.png"
                      alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                  </div>
                  <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">
      
                      <form action="" method="POST">
      
                        <div class="d-flex align-items-center mb-3 pb-1">
                          <i class="fas fa-cubes fa-2x me-3" style="color: ##FFFFFF;"></i>
                          <span class="h1 fw-bold mb-0">TC</span>
                        </div>
      
                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Faça login em sua conta</h5>
      
                        <div class="form-outline mb-4">
                              <label>E-mail</label>
                              <input type="text" name="email">

                        </div>
      
                        <div class="form-outline mb-4">
                        <label>senha</label>
                              <input type="password" name="senha">
                        </div>
      
                        <div class="pt-1 mb-4">
                          <button class="btn btn-dark btn-lg btn-block" type="submit">Entrar</button>
                        </div>
      
                       
                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Não tem uma conta?<a href="index2.php?page=novo"
                            style="color: #393f81;">Cadastrar-se</a></p>
                        
                      </form>
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
</body>
</html>