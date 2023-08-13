<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda 6</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body class='w3-white'>

    <div class="w3-padding w3-content w3-half w3-display-topmiddle w3-margin">
    <h1 class="w3-center w3-purple w3-round-large w3-margin">Notas de inglês</h1>
    <table class='w3-table-all w3-centered w3-text-black'>
        <thead>
            <tr class='w3-center w3-purple'>
                <th>Código aluno</th>
                <th>Nome</th>
                <th>Nota 1</th>
                <th>Nota 2</th>
                <th>Nota 3</th>
                <th>Nota 4</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $servername = 'localhost';
            $username = 'root';
            $password = 'usbw';
            $dbname = 'agenda_6';
            $connection = new mysqli($servername, $username, $password, $dbname);
            if ($connection->connect_error){
                die('Connection Failed: '.$connection->connect_error);
            }
            $sql = "SELECT * FROM alunoconcluinte";
            $resultado = $connection->query($sql);
            if ($resultado != null)
            foreach($resultado as $linha){
                echo '<tr>';
                echo '<td>'.$linha['idalunoconcluinte'].'</td>';
                echo '<td>'.$linha['nome_aluno'].'</td>';
                echo '<td>'.$linha['nota1'].'</td>';
                echo '<td>'.$linha['nota2'].'</td>';
                echo '<td>'.$linha['nota3'].'</td>';
                echo '<td>'.$linha['nota4'].'</td>';
                echo '</tr>';
            } 
            $connection->close();
            ?>
        </tbody>
    </table>
</div>
</body>
</html>