<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar</title>
</head>
<body>
    <form action="cadastrar.php" method="post" enctype="multipart/form-data">

        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">

        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email">

        <label for="anexo">Anexo</label>
        <input type="file" name="anexo" id="anexo">

        <input type="submit" value="Cadastrar">

    </form>
</body>
</html>