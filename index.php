<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do list</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .entrada input[type="text"] {
            width: calc(100% - 70px);
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
            margin-bottom: 10px;
        }

        .entrada button {
   
            padding: 10px;
            border: none;
            background-color: #007bff;
            color: #fff;
            border-radius: 10pt;
            font-size: 16px;
            cursor: pointer;
        }

        .lista ul {
            list-style-type: none;
            padding: 0;
        }

        .lista ul li {
            background-color: #f9f9f9;
            padding: 10px;
            margin-bottom: 5px;
            border-radius: 5px;
        }

        .lista ul li:hover {
            background-color: #e9e9e9;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="entrada">
            <form action="index.php" method="post">
                <input type="text" name="texto" id="item" placeholder="Digite sua tarefa...">
                <button type="submit" name="add">Adicionar</button>
            </form>
        </div>
        <div class="lista">
            <h2>Lista de Afazeres</h2>
            <ul>
            <?php
         
            include('dados.php');
                // Verifica se há tarefas na sessão e as exibe
                if (!empty($_SESSION['tarefas'])) {
                    foreach ($_SESSION['tarefas'] as $tarefa) {
                        echo "<li>$tarefa</li>";
                    }
                } else {
                    echo "<li>Nenhuma tarefa adicionada ainda.</li>";
                }
                ?>
            </ul>
        </div>
    </div>
</body>
</html>
