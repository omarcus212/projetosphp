<?php

	
	require('../modulo/calculos.php');
    require('../modulo/config.php');
 
	

	
	$valor1 = (double) 0;
	$valor2 = (double) 0;
	$resultado = (double) 0;
	$opçao = (string) null;


			if(isset($_POST['btncalc'])){
				
				$valor1 = $_POST['txtn1'];
				$valor2 = $_POST['txtn2'];
				
			

					if($_POST['txtn1'] == '' || $_POST['txtn2'] == ''){
						echo (ERRO_MSG_CAIXA_VAZIA);
					}
				
							if(!isset($_POST['rdocalc'])){ 
							echo (ERRO_MSG_OPERACA_NAO_SELECIONADA);
							} else{
										if(!is_numeric($valor1) || !is_numeric($valor2))
										echo (ERRO_MSG_CARACTER_INVALIDO);

											  else{
														$opçao = strtoupper($_POST['rdocalc']);
													    $resultado=fazercalcl($valor1,$valor2,$opçao);
							                    }      
						         }        	   

			}

	


	
?>
    <html>

    <head>
        <title>Calculadora - Simples</title>
        <link rel="stylesheet" href="css.css">
        <link rel="stylesheet" href="menu.css">
        <link rel="stylesheet" href="../Calculadora//css//style.css">
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
                        <li><a href="">Calculadora</a></li>
                        <li><a href="../Media/media.php">Media</a></li>
                        <li><a href="../Tabuada/Tabuada.php">Tabuada</a></li>
                        <li><a href="../Impar-par/impar-par.php">Impar e Par</a></li>
                    </ul>
                </div>
            </div>

        </header>

        <main>
            <div id="conteudo">
                <div id="titulo">
                    Calculadora Simples
                </div>

                <div id="form">
                    <form name="frmcalculadora" method="post" action="">

                        Valor 1:<input type="text" name="txtn1" value="<?php echo($valor1);?>"> <br> Valor 2:<input type="text" name="txtn2" value="<?= $valor2;?>"> <br>
                        <div id="container_opcoes">
                            <input type="radio" name="rdocalc" value="somar" <?=$opçao=='SOMAR' ? 'checked':null;?> >Somar<br>
                            <input type="radio" name="rdocalc" value="subtrair" <?=$opçao== 'SUBTRAIR' ? 'checked' :null;?> >Subtrair <br>
                            <input type="radio" name="rdocalc" value="multiplicar" <?=$opçao=='MULTIPLICAR' ? 'checked':null;?> >Multiplicar <br>
                            <input type="radio" name="rdocalc" value="dividir" <?=$opçao=='DIVIDIR' ? 'checked':null;?> >Dividir <br>

                            <input type="submit" name="btncalc" value="Calcular">
                            <input type="submit" name="btnlimpar" value="limpar" <?php $dele='btnlimpar' ; ?>>  <!-- Gato kkk, só para lembrar -->

                        
                        <div id="resultado">
                            <?=$resultado?>
                        </div>

                    </form>
                </div>

            </div>
        </main>

    </body>

    </html>