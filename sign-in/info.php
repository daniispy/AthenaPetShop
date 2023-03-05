<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.101.0">
  <title>Athena PetShop - Página de Login</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
  <link rel="stylesheet" href="main.php">





  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }
    
  </style>


  <!-- Custom styles for this template -->
  <link href="signin.css" rel="stylesheet">
</head>

<body class="text-center">

  <main class="form-signin w-100 m-auto">
      <img class="mb-4" src="logo.png" alt="" width="200" height="200" >
    <?php 
    require_once 'banco.php';
    require_once 'tabelas.php';
    $usuarios = select_usuario();
    foreach ($usuarios as $usuario){
      echo "<div class=\"card text-bg-warning mb-3\" style=\"max-width: 18rem;\">";
      echo "<div class=\"card-body\">";
      echo "<form action=\"deletar.php\" method=\"POST\">";
      echo "<input type=\"hidden\" name=\"id\" value =\" ".$usuario['id_usuario']. " \" >";

      
      echo "<h5 class=\"card-title\">O email enviado foi ".$usuario['email_usuario'] ."</h5>";

      echo "<h5 class=\"card-title\">O nome enviado foi ".$usuario['nome_usuario'] ."</h5>";

      echo "<h5 class=\"card-title\">O nome do pet enviado foi ".$usuario['pet_usuario'] ."</h5>";

      echo "<h5 class=\"card-title\">A data enviada foi ".$usuario['data_usuario'] ."</h5>";

      echo "<h5 class=\"card-title\">O horario enviado foi ".$usuario['horario_usuario'] ."</h5>";

      echo "<h5 class=\"card-title\">O telefone enviado foi ".$usuario['tel_usuario'] ."</h5>";

      echo "<h5 class=\"card-title\">O servico enviado foi ".$usuario['tipo_servico'] ."</h5>";

      echo "<h5 class=\"card-title\">O comentario enviado foi ".$usuario['comentarios_usuario'] ."</h5>";

      if($usuario['zapzap_usuario'] == 1){

        echo "<h5 class=\"card-title\"> O usuario deseja receber notificacoes via ZapZap </h5>";

      }
      else{

        echo "<h5 class=\"card-title\"> O usuario NAO deseja receber notificacoes via ZapZap </h5>";

      }
      echo "<input type=\"submit\" name=\"deletar\" value= \"Deletar\">";
      echo "</form> </div></div>";

      
      
  }

    ?>
  </main>



</body>

</html>