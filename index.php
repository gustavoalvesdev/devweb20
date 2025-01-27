<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale1.0">
        <title>Formulários</title>
    </head>
    <body>
        <?php  

        if (isset($_POST['enviar'])) {
            $nome = $_POST['nome'] ?? '';

            echo 'Meu nome é ' . ($nome != '' ? $nome : 'undefined') . '<br />';
        }

        ?>  

        <form method="POST">
            <label for="nome">Nome:</label><br />
            <input type="text" name="nome" id="nome" /><br /><br />
            <input type="submit" name="enviar" value="Enviar" />
        </form>
    </body>
</html>