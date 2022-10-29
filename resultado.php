<?php
    $nome = $_POST['nome'];
    $nota1 = $_POST['n1'];
    $nota2 = $_POST['n2'];
    $aulas = $_POST['quantA'];
    $faltas = $_POST['quantF'];
    $media = ($nota1 + $nota2) /2;
    $frequencia = (($aulas - $faltas) / $aulas)*100;
    $res = "";
    
    if($media >= 6 && $frequencia >= 75){
        $res = "Aprovado.";
    }else{
        $res = "Reprovado.";
    }

    echo "<h2 font-size: 20px;
 text-align: center
 padding: 30px'
 >Resultado
 <br>
 <br>Nome do Aluno: $nome 
 <br>Nota 1: $nota1
 <br>Nota 2: $nota2
 <br>Frequência: $frequencia
 <br>Situação: $res
 </h2>";

?>