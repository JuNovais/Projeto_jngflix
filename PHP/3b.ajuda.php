
<?php 
    $_con = mysqli_connect('127.0.0.1', 'root', '', 'bd_jngflix');
    if ($_con === FALSE) {
        echo "Não foi possível conectar ao Servidor de banco de dados ";
    } else 
    
    {
        echo "Foi possível conectar ao Servidor de banco de dados ";
        // Recupere os dados do formulário usando o método POST
        $data = $_POST['data']; 
        $titulo = $_POST['titulo']; 
        $descricao = $_POST['descricao'];
        // Crie e execute a consulta de inserção
        $query = "INSERT INTO ajuda (data, titulo, descricao) 
        VALUES ('$data', '$titulo', '$descricao')";
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