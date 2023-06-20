<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include('conexao.php');
        $sql= "SELECT * FROM fluxo_caixa";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result);
    ?>


        
        <h1>Consulta fluxo</h1>

        <table class="table table-bordered" align="center" border="1" width="500" >
            <thead>
            <tr>
                <th scope="col">Código</th>
                <th scope="col">Data</th>
                <th scope="col">Tipo</th>
                <th scope="col">Valor</th>
                <th scope="col">Histórico</th>
                <th scope="col">Cheque</th>
            </tr>
            </thead>
    
            <?php
                do{
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['data']."</td>";
                    echo "<td>".$row['tipo']."</td>";
                    echo "<td>".$row['valor']."</td>";
                    echo "<td>".$row['historico']."</td>";
                    echo "<td>".$row['cheque']."</td>";
                    echo "<td><a href='altera_fluxo_caixa.php?id="  
                    .$row['id']."'>Alterar</a></td>";
                    echo "<td><a href='excluir_agenda.php?id_agenda="
                    .$row['id_agenda']."'>Excluir</td>";
                    echo "</tr>";
                }while($row = mysqli_fetch_array($result))
            ?> 
           
        </table>
        <a href="index.php">Voltar</a>
</body>
</html>