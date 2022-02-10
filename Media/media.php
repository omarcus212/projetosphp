<?php

require('./modulo/config.php');

$nota1 = (Double)0;
$nota2 =  (Double)0;
$nota3 = (Double)0;
$nota4 = (Double)0;
$totalmedia = (Double)0;



if (isset($_POST["btncalc"])) {   //calcular depois que o botão for clicked//


    $nota1 = (Double)0;
    $nota2 = (Double)0;
    $nota3 = (Double)0;
    $nota4 = (Double)0;

    $nota1 = $_POST["txtn1"];
    $nota2 = $_POST["txtn2"];
    $nota3 = $_POST["txtn3"];
    $nota4 = $_POST["txtn4"];

       if ($_POST['txtn1'] == '' || $_POST['txtn2'] == ''   || $_POST['txtn3'] == '' || $_POST['txtn4'] == '') {

           echo (ERRO_MSG_CAIXA_VAZIA);

        } else {
         }
    if (!is_numeric($nota1) || !is_numeric($nota2) || !is_numeric($nota3) || !is_numeric($nota4)) {
        echo (ERRO_MSG_CARACTER_INVALIDO);
    } else {

        $totalmedia = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
    }
} else {     //deixando as variaveis em branco caso o butão não tenha sido clicked//
    $nota1 = (Double)null;
    $nota2 =  (Double)null;
    $nota3 = (Double)null;
    $nota4 = (Double)null;
    $totalmedia = (Double)null;

}





if (isset($_POST["media.php"])) {     //zerar as variaveis para uma novo calculo//

    $nota1 = null;
    $nota2 = null;
    $nota3 = null;
    $nota4 = null;
    $totalmedia = null;
}




?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Média</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="./css//menumedia.css">
    <meta charset="utf-8">
</head>

<body>
    <header>
        <div class="menuzinho">
            <input type="checkbox" name="click" id="checkburg">
            <label for="checkburg">
                <span></span>
                <span></span>
                <span></span>
            </label>
            <div class="menu">
                <ul>
                    <li><a href="../Calculadora/calculadora_simples.php">Calculadora</a></li>
                    <li><a href="">Media</a></li>
                    <li><a href="../Tabuada/Tabuada.php">Multiplicação</a></li>
                    <li><a href="../Impar-par/impar-par.html">Impar e Par</a></li>
                </ul>
            </div>
        </div>
    </header>
    <main>
        <div id="conteudo">
            <header id="titulo">
                Calculo de Médias
            </header>

            <div id="form">
                <form name="frmMedia" method="post" action="media.php">
                    <div>

                        Nota 1: <input type="text" name="txtn1" value="<?php echo ($nota1) ?>">
                    </div>

                    <div>

                        Nota 2: <input type="text" name="txtn2" value="<?php echo ($nota2) ?>">
                    </div>

                    <div>

                        Nota 3:<input type="text" name="txtn3" value="<?php echo ($nota3) ?>">
                    </div>

                    <div>
                        Nota 4: <input type="text" name="txtn4" value="<?php echo ($nota4) ?>">
                    </div>
                    <div>
                        <input type="submit" name="btncalc" value="Calcular">
                        <div id="botaoReset">
                            <a href="media.php">
                                Novo Cálculo
                            </a>
                        </div>
                    </div>
                </form>

            </div>
            <footer id="resultado">
                A média é: <?php echo ($totalmedia) ?>
            </footer>
        </div>
    </main>

</body>

</html>