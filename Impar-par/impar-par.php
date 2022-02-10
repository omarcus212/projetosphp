<?php 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="imppar-menu.css">
    <link rel="stylesheet" href="impar-par.css">
    <title>Impar e Par</title>
</head>

<body>

    <header>
        <div class="menu-hambu">
            <input type="checkbox" name="menu-burg" id="menuburg">
            <label for="menuburg">
                <div class="menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </label>
            <div class="menuzinho">
                <div>
                    <div>
                        <ul>
                            <li><a href="../Calculadora/calculadora_simples.php">calculadora</a></li>
                            <li><a href="../Media/media.php">Media</a></li>
                            <li><a href="../Tabuada/Tabuada.php">Tabuada</a></li>
                            <li><a href="">Impar e Par</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <main>

        <div id="conteudo">
            <div id="titulo">
                <h4>Impar e Par</h4>
            </div>

            <div id="form">
                <form name="frmcalculadora" method="post" action="">

                    N. inicial : <input type="text" name="txtn1" value="0" id="imparcaixa"> <br> N. final <input type="text" name="txtn2" value="0" id="parcaixa"> <br>
                    <div id="container_opcoes">

                        <input type="submit" name="btncalc" value="Calcular" id="calc">
                        <input type="submit" name="btnlimpar" value="limpar" id="limpar">

                    </div>
                    <div class="titleh3">
                        <h3> impar</h3>
                        <h3> par</h3>
                    </div>

                    <div id="resultadoimpar">
                    </div>

                    <div id="resultadopar">
                    </div>

                </form>
            </div>
        </div>
    </main>
</body>

</html>