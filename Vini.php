<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Servidor</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-container h2 {
            text-align: center;
        }

        .result {
            margin-top: 20px;
            text-align: center;
            font-weight: bold;
        }

        .error {
            margin-top: 20px;
            text-align: center;
            color: #ff0000;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Inserir Dados do Servidor</h2>

    <form action="Vini.php" method="post">
        <!-- Adicione aqui seus campos de formulário -->

        <div class="form-group">
            <input type="submit" value="Inserir">
        </div>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Exibir resultados ou mensagens de erro aqui
        if ($conexao->connect_error) {
            echo '<div class="error">Conexão falhou: ' . $conexao->connect_error . '</div>';
        } else {
            echo '<div class="result">';
            if ($conexao->query($sql) === TRUE) {
                echo "Dados do Servidor inseridos com sucesso!";
            } else {
                echo "Erro ao inserir dados do Servidor: " . $conexao->error;
            }
            echo '</div>';
            // Fechar conexão
            $conexao->close();
        }
    }
    ?>
</div>

</body>
</html>
