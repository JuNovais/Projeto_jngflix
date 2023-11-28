<?php 
    $_con = mysqli_connect('127.0.0.1', 'root', '', 'jngflix');
    if ($_con === FALSE) {
        echo "Não foi possível conectar ao Servidor de banco de dados ";
    } else 
    
    {
        echo "Foi possível conectar ao Servidor de banco de dados ";

        // Recupere os dados do formulário usando o método POST
        

        $nome = $_POST['nome']; 
        $nacionalidade = $_POST['nacionalidade']; 
        //$datanasc = $_POST['data'];
        $ocupacao= $_POST['ocupacao'];
        $principaistrabalhos = $_POST['principaistrabalhos'];
        $premios= $_POST['premios'];
        $progenitores = $_POST['progenitores'];
        $parentesco= $_POST['parentesco'];




        // Crie e execute a consulta de inserção
        $query = "INSERT INTO usuario (nome, nacionalidade, ocupacao, principaistrabalhos, premios, progenitores, parentesco) 
        VALUES ('$nome', '$nacionalidade', '$ocupacao', '$principaistrabalhos', '$premios', '$progenitores', '$parentesco')";
        $result = mysqli_query($_con, $query);

        if ($result) 
        {
            echo "Os dados foram inseridos com sucesso.";
        } 
        else 
        {
            echo "Erro ao inserir os dados: " . mysqli_error($_con);
        }

        mysqli_close($_con);
    }
?>