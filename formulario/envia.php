<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="recebe.php" method="post">
        <label for="nome">Nome</label>
        <input type="text" name="nomeUsuario" id="name">
        <br>
        <label for="idade">Idade</label>        
        <input type="number" name="idadeUsuario" id="idade">
        <br>
        <label for="cpf">Cpf</label>
        <input type="number" name="cpfUsuario" id="cpf">
        <br>
        <label for="periodo">Periodo</label>
        <select name="periodoUsuario" id="periodo">
            <option value="">Escolha-></option>
            <option value="Manhã">Manhã</option>
            <option value="Tarde">Tarde</option>
            <option value="Noite">Noite</option>

        </select>
        
        <input type="submit" value="Enviar">
</form>
</body>
</html>