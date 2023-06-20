<?php 
    include('conexao.php');
    
    $id_agenda = $_GET['id'];
    $sql = "select * from fluxo_caixa where id = $id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <h1>Alterar</h1>
    <form action="altera_fluxo_caixa_exe.php" method="POST" enctype="multipart/form-data">
    <input name ="id" type="hidden" value="<?php echo $row['id']?>">
    
    <div>
        <label for="data">Data</label>
        <input type="date" name="data" value="('y-m-d')" id="data">
    </div>

    

    <div>
        <label for="tipo">Tipo</label>
        <input type="radio" id="entrada" name="tipo" value="entrada">
        <label for="entrada">Entrada</label>
        <input type="radio" id="saida" name="tipo" value="saida">
        <label for="saida">Saída</label>
    </div>

    

    <div>
        <label for="valor">Valor</label>
        <input type="number" name="valor" id="valor">
    </div>

    <div>
        <label for="historico">Histórico</label>
        <input type="text" name="historico" id="historico">
    </div>


    <div>
        <label for="cheque">Cheque</label>
        <select name="cheque" id="cheque">
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
        </select>
    </div> 

    <div>
        <button type="submit" value="enviar">Enviar</button>
    </div>
</form>
</body>
</html>