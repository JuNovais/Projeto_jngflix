<?php 
    $_con = mysqli_connect('127.0.0.1', 'root', '', 'bd_jngflix');
    if ($_con === FALSE) {
        echo "Não foi possível conectar ao Servidor de banco de dados ";
    } else {
        echo "Foi possível conectar ao Servidor de banco de dados ";

        // Verifique se o formulário foi submetido
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Recupere os dados do formulário usando o método POST
            $codigo = $_POST['codigo'];

            // Crie e execute a consulta de inserção
            $query = "INSERT INTO favoritos (codigo) VALUES ('$codigo')";
            $result = mysqli_query($_con, $query); // Defina $result após a execução da consulta

            if ($result) {
                echo "Os dados foram inseridos com sucesso.";
            } else {
                echo "Erro ao inserir os dados: " . mysqli_error($_con);
            }
        } else {
            echo "O formulário não foi enviado.";
        }

        mysqli_close($_con);
    }
?>
