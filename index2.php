<!DOCTYPE html>




<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <style>
      .botao{
        align-items: center;
        justify-content: center;
        color: aliceblue;
        border-radius: 8px;
        display: flex;
        margin-top: 300px;
      }
      .botao button{
      color: aliceblue;
      cursor: pointer;
      background-color: red;
      border-radius: 8px;
      padding: 1rem;
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      
      }
      .botao a{
        text-decoration: none;
        color: aliceblue;

      }


    </style>
  </head>

  <body>
    
  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        
        <li class="nav-item">
          <a class="nav-link" href="?page=novo">Novo Usuário</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=listar">Listar usuários</a>
      </ul>
    </div>
  </div>
</nav>
      
      <div class="container">
          <div class="row">
              <div class="col mt-5">
                <?php
                include("config.php");
                switch(@$_REQUEST["page"]){
                case "novo":
                include("novo-usuario.php");
                break;
                    case "listar":
                 include("listar-usuario.php");
                    break;
                case "salvar":
                    include("salvar-usuario.php");
                    break;
                case "editar":
                    include("editar-usuario.php");
                    break;
                    default:
                    print "Bem Vindos!";
    }
    

?>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
      
    
    <div class="botao">
    <button ><a href="index.php">Sair para página de Login</a></button>

    
    </div>
  </body>
</html>