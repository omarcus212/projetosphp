<?php

$max = (double)0;
$min = (double)0;
$contdor = (double)0;
$resultado = (double)0;


if (isset($_POST['btncalc'])) {

    $min = $_POST['txtn1'];
    $max = $_POST['txtn2'];
  

    if($_POST['txtn1'] == "" || $_POST['txtn2'] == ""){
             echo ('Caixa Vazia');
    }else{
          if($max == 0){
               echo('<script>alert("ERRO! impossivel calcular,caracter invalido"); </script>' );
           
          }else{
            $resultado='';
            while($contdor<=$max){
                $total = $min*$contdor;
                 $resultado .= " $min x  $contdor = $total <br> ";
                 
                   $contdor++;


          }
       

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
    <link rel="stylesheet" href="../menu/menu.css">
    <link rel="stylesheet" href="cssTabuada.css">
    <title>Tabuada</title>
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
                            <li><a href="">Tabuada</a></li>
                            <li><a href="../Impar-par/impar-par.php">Impar e Par</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <main>

        <div id="conteudo">
            <div id="titulo">
                <h4>Tabuada </h4>
            </div>

            <div id="form">
                <form name="frmcalculadora" method="post" action="">

                    Multiplicador: <input type="text" name="txtn1" id="multcaixa" value="<?php echo($min);?>"> <br> Maxmultiplicador: <input type="text" name="txtn2" id="maxcaixa" value="<?php echo($max);?>" > <br>
                    <div id="container_opcoes">

                        <input type="submit" name="btncalc" value="Calcular" id="calc">
                        <input type="submit" name="btnlimpar" value="limpar" id="limpar">

                    </div>
                    <div id="resultado">
                    <?= $resultado?>
                    </div>

                </form>
            </div>
        </div>
    </main>
</body>

</html>