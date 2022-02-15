<?php



/***************************************
 
 Obj: arquivo de funções matematicas que poderá ser utilizado dentro do projeto

 Ator: Spider-marcus

 Data:05/02/2022
 
 Versão:1.0

 *****************************************/


function fazercalcl($number1, $number2, $operacao)
{

    $num1 = (float)$number1;
    $num2 = (float)$number2;
    $tipoclc = (string)$operacao;
    $result = (float)0;

    switch ($tipoclc) {

        case "SOMAR":
            $result = $num1 + $num2;
            break;

        case "SUBITRAIR":
            $result = $num1 - $num2;
            break;

        case "MULTIPLICAR":
            $result = $num1 * $num2;
            break;

        case "DIVIDIR":
            if ($num2 == 0)
                echo (ERRO_MSG_2VALOR_0);
            else {
                $result = $num1 / $num2;
            }
            break;
    }

    $result = round($result, 2);

    return $result;
}





function calcularTabuada($max, $min){


    $valormax = (float)$max;
    $valormin = (float)$min;
    $contdor = (float)0;
    $resultado = (float)0;


    $resultado = '';

    while ($contdor <= $valormax) {

        $total = $valormin * $contdor;

        $resultado .= " $valormin x  $contdor = $total <br> ";

        $contdor++;
    }

    return  $resultado;
}







function calculoimparPar($valorinicial, $valorfinal){
    

}










/*funcao utilizada para retonar o numeros do checklist*/
function valorinicial($listinicial)
{
    $contador = 0;
    $valortotal = 0;
    $ttoalizandopar = 0;
    $ttoalizandoimpar = 0;

    $listvalorinicial = (float)$listinicial;




    while ($contador <= 500) {
        $listvalorinicial .= '<option value="' . $contador . '">' . $contador . '</option>';
        $contador++;
    }

    function valorfinal($listfinal)
    {
        $listvalorfinal = (float)$listfinal;
        $contador = 0;
        $valortotal = 0;
        $ttoalizandopar = 0;
        $ttoalizandoimpar = 0;


        $contador = 0;

        while ($contador <= 1000) {
            $listvalorfinal .= '<option value="' . $contador . '">' . $contador . '</option>';
            $contador++;
        }

        return $listvalorfinal;
    }



    return $listvalorinicial;
}
