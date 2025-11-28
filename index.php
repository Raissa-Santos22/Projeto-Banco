<?php
require 'Banco.class.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Meu Banco</title>
</head>
<body>
    <h1>Banco Master</h1>
    <h3>Correntista</h3>

    <?php
    $banco = new Banco();
    $con = $banco->conectar();

    if($con){
        $dados = $banco->localizarTitular(1);

        if(!empty( $dados)){
            ?>
            Titular .... :<?php echo $dados ['titular'];  ?>; <br>
            Agência..... : <?php echo $dados ['agencia']; ?>; <br>
            Conta....... : <?php echo $dados ['conta'];   ?>; <br>
            Saldo....... : <?php echo $dados ['saldo'];  ?>; <br>
            <?php

        }else{
            echo "<script>alert('Titular não econtrado')</script>";
            exit;
        }
    }else{
        echo "<script>alert('Banco indisponível! Tente novamente mais tarde...')</script>";
            exit;
    }
    ?>

    <a href= "sair.php">Sair</a>
    <hr>
    <h3>Movimentação / Extrato</h3>
    <a href="ad_transacao.php">Adicionar Transação</a>
</body>
</html>