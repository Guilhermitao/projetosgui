<?php
$numero1 = $_POST['numero1'];
$numero2 =$_POST['numero2'];
$operacao=$_POST['operacao'];
$nome=$_POST["nome"];
$telefone=$_POST["telefone"];
$email=$_POST["email"];
$interesse=$_POST["interesse"];
$recado=$_POST["recado"];

function todas_operacoes($numero1,$numero2){
    echo "o resultado da soma e ".$numero1+$numero2, "</br>";
    echo "o resultado da subtracao e ".$numero1-$numero2, "</br>";
    echo "o resultado da multiplicacao e ".$numero1*$numero2, "</br>";
    echo "o resultado da divisao e ".$numero1/$numero2, "</br>";
}

echo "Nome: " .$nome ,"</br>";
echo "Telefone: " .$telefone ,"</br>";
echo "area de interesse: " .$interesse ,"</br>";
echo "seu resumo: " .$recado ,"</br>"; 

    switch($operacao){      
        case $operacao=="somar":
       echo "o resultado da soma e ".$numero1+$numero2, "</br>";
        break;
        case $operacao=="subtrair":           
            echo "o resultado da subtracao e ".$numero1-$numero2, "</br>";
            break;
            case $operacao=="multiplicar":               
                echo "o resultado da multiplicacao e ".$numero1*$numero2, "</br>";
                break;
                case $operacao=="dividir":                 
                    echo "o resultado da divisao e ".$numero1/$numero2, "</br>";
                    break;
                    case $operacao=="todos_oper":                 
                        todas_operacoes($numero1,$numero2);
                        break;
    }    
?>
