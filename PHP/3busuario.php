
<?php 
    $_con = mysqli_connect('127.0.0.1', 'root', '', 'jngflix');
    if ($_con === FALSE) {
        echo "Não foi possível conectar ao Servidor de banco de dados ";
    } else 
    
    {
        echo "Foi possível conectar ao Servidor de banco de dados ";

        // Recupere os dados do formulário usando o método POST
        

        $nome = $_POST['nome']; 
        $email = $_POST['email']; 
        //$datanasc = $_POST['data'];
        $cpf = $_POST['cpf'];
        $endereco = $_POST['endereco'];
        $cidade = $_POST['cidade'];
        $senha = $_POST['senha'];




        // Crie e execute a consulta de inserção
        $query = "INSERT INTO usuario (nome, cpf, email, senha, endereco, cidade) 
        VALUES ('$nome', '$cpf', '$email', '$senha', '$endereco', '$cidade')";
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