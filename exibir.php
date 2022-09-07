<html>

<head>
    <title> .: Página com a criação da tabela :. </title>
    <meta charset='utf-8'>
    <table border='1'>
        <tr>
            <td>Tabela Teste</td>
        </tr>
        <?php
        $quantidade = $_POST['quantidade'];
        for ($i = 1; $i <= $quantidade; $i++) {
            echo "<tr><td>$i</td></tr>";
        }
        ?>
    </table>
</head>

</html>
