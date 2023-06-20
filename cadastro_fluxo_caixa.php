<?php

    include("conexao.php");
        


    $id = $_POST['id'];
    $data = $_POST['data'];
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    $historico = $_POST['historico'];
    $cheque = $_POST['cheque'];

   
    $sql = "INSERT INTO fluxo_caixa (id, data, tipo, valor, historico, cheque)";

    $sql .= " VALUES ('".$id."','".$data."', '".$tipo."', '".$valor."', '".$historico."', '".$cheque."')";

    echo $sql. "<br>";
    $result = mysqli_query($con, $sql);
    if($result)
    echo "Dados cadastrados com sucesso!";
    else
    echo "Erro ao tentar cadastrar!";
    

    echo "<h3>Cadastro fluxo caixa </h3>";
    echo "<hr>";
    echo "data: $data <br>";
    echo "tipo: $tipo <br>";
    echo "valor: $valor <br>";
    echo "histórico: $historico <br>";
    echo "cheque: $cheque <br>";


    $sql = "INSERT INTO fluxo_caixa (id, data, tipo, valor, historico, cheque)";

    $sql .= " VALUES ('".$id."','".$data."', '".$tipo."', '".$valor."', '".$historico."', '".$cheque."')";

    echo $sql. "<br>";
    $result = mysqli_query($con, $sql);
    if($result)
    echo "Dados cadastrados com sucesso!";
    else
    echo "Erro ao tentar cadastrar!";

?>