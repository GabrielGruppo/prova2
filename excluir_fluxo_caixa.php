<?php 
    include('conexao.php');
    $id = $_GET['id'];
    $sql = "delete from agenda where id = '$id'";

    echo "<br>";
    $result = mysqli_query($con, $sql);
    if($result)
    echo "Dados excluídos com sucesso!";
    else
    echo "Erro ao tentar excluir!";

?>
<br>
<a href="listar_fluxo_caixa.php">Voltar</a>