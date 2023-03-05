<?php

    $Login = $_POST['loginformulario'];
    $Senha = $_POST['senhaformulario'];

    if($Login == '1234' and $Senha == '1234'){
        header("location:formulario.php");
    }
    else{
        header("location:senhainvalida.html");
    }

?>