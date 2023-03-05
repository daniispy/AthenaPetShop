<?php 
require_once 'banco.php';
require_once 'tabelas.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Athena PetShop - Página d</title>

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
    <form method = "post" action="inserir.php">
        <img class="mb-4" src="logo.png" alt="" width="200" height="200">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"></label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Digite seu e-mail" required>
        </div>
        <div class="mb-3">
            <input class="form-control" type="text" name="nome" placeholder="Digite seu nome" aria-label="default input example" required>
        </div>
        <div class="mb-3">
            <input class="form-control" type="text" name ="nomepet" placeholder="Digite o nome do seu pet" aria-label="default input example" required>
        </div>
        <div class="form-floating mb-3">
            <input type="date" name="data" class="form-control" id="floatingInput" placeholder="Data do banho do seu pet" required>
            <label for="floatingInput">Data do banho do seu pet</label>
          </div>
          <div class="form-floating mb-3">
            <input type="time" name="horario" class="form-control" id="floatingInput" placeholder="Horario do banho do seu pet" required>
            <label for="floatingInput">Horario do banho do seu pet</label>
          </div>
        <div class="mb-3">
            <input type="tel" name="telefone"class="form-control" id="floatingInput" placeholder="Digite seu numero de telefone" required>
        </div>
        <div class="mb-3">
            <select class="form-select form-select-sm" name="tipobanho" aria-label=".form-select-sm example" required>
                <?php         
                $servicos = select_servico();
                foreach ($servicos as $servico){
                    echo "<option value=\"{$servico['id_servico']}\">{$servico['tipo_servico']}</option>";
                }
                
                
                
                
                ?>
                <!-- <option selected>Selecione o tipo de banho</option>
                <option value="Somente Banho">Somente Banho</option>
                <option value="Banho e Tosa">Banho e Tosa</option>
                <option value="Somente Tosa">Somente Tosa</option> -->
            </select>
        </div>
          </div>
        </div>
          <div class="form-floating mb-3">
            <textarea class="form-control" name="comentario" placeholder="Deixe um comentario aqui" id="floatingTextarea"></textarea required>
            <label for="floatingTextarea">Comentarios</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" name="zapzap" type="checkbox" value="1" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Deseja receber notificacoes via ZapZap?
            </label>
          </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    </main>



</body>

</html>