<?php                
                

 
 /***************************************
 
 Obj: arquivo de funções matematicas que poderá ser utilizado dentro do projeto

 Ator: Spider-marcus

 Data:05/02/2022
 
 Versão:1.0

 *****************************************/
 

function fazercalcl($number1,$number2,$operacao){
		
    $num1=(double)$number1;
    $num2=(double)$number2;
    $tipoclc=(String)$operacao;
    $result = (double)0;

    switch ($tipoclc) {

     case"SOMAR": $result = $num1 + $num2; break;

         case"SUBITRAIR":$result = $num1 - $num2; break;

             case"MULTIPLICAR":$result = $num1 * $num2; break;

                 case"DIVIDIR":if ($num2 == 0) 
                     echo(ERRO_MSG_2VALOR_0);
                      else{
                         $result = $num1 / $num2;
                      } break;


                 
  }

               $result = round($result,2); 

              return $result;

       
 }



?>