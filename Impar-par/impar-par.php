<?php

$valorinicial = (float)0;
$valorfinal = (float)0;
$resultadopar = (float)0;
$resultadoimpar = (float)0;
$contador = 0;
$valortotal = 0;
$ttoalizandopar = 0;
$ttoalizandoimpar = 0;
$teste = (int)0;

if (isset($_POST['btncalc'])) {

    $valorinicial = $_POST['listnumeroinicial'];
    $valorfinal = $_POST['checklistnumerofinal'];




    if ($valorinicial >= $valorfinal) {

        echo ('<script>alert("ERRO! valor final terá que ser mais alto"); </script>');
    } else {

        $resultadopar = null;
        $resultadoimpar = null;
        $valortotalpar = $valorinicial + $valorfinal;
        $valortotalimpar = $valorinicial + $valorfinal;


        while ($valorinicial <= $valorfinal) {

            $resultadoimpar .= $valorinicial++ . '<br>';
            $resultadopar .=  $valorinicial++ . '<br>';

            if ($valorinicial % 2 == 0) {

                $ttoalizandopar++;
                $resultadopar;
            } else {

                $resultadoimpar;
            }

            $ttoalizandoimpar++;
        }
      
    }
    if (isset($_POST['btnlimpar'])) {

        $valorinicial = (float)0;
        $valorfinal = (float)0;
        $resultadopar = (float)0;
        $resultadoimpar = (float)0;
        $contador = 0;
        $valortotal = 0;
    }
}

while($contador <= 500){
    $teste .= '<option value="'. $contador .'">'. $contador. '</option>';
   $contador++;
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../menu/menu.css">
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
                 
                 <select name="listnumeroinicial" id="list1" min='0' max='500' >
                 <option value="0" selected> escolha:  </option >
                  <?= $teste ?> 
                
                

                 </select>
                    <select name="checklistnumerofinal" id="list2">
                    <option value="0" selected> escolha:  </option >
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="9"> 9 </option>
                    <option value="1000"> 1000 </option>
                    </select>
                    <div id="container_opcoes">

                        <input type="submit" name="btncalc" value="Calcular" id="calc">
                        <input type="submit" name="btnlimpar" value="limpar" id="limpar">

                    </div>
                    <div class="titleh3">
                        <h3> impar</h3>
                        <h3> par</h3>
                    </div>

                    <div id="resultadoimpar">

                        <?= $resultadoimpar ?>

                    </div>

                    <div id="resultadopar">
                        <?= $resultadopar ?>
                    </div>

                    <h2 id="numeropar"> PAR : <?= $ttoalizandopar; ?> </h2>
                    <h2 id="numeroimpar"> IMPAR : <?= $ttoalizandoimpar; ?> </h2>
                </form>
            </div>
        </div>
    </main>
</body>

</html>