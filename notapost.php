<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de notas</title>
</head>

<body>
    <h1>Digite sua nota: </h1>
    <form method="post">
        <input type="number" name="nota" step="0.1" required>
        <br><br>
        <button type="submit">Verificar</button>
    </form>

    <?php

    if(isset($_POST['nota'])) {
        $nota = $_POST['nota']; // recebe a nota do forms que veio do usuário

     if($nota >= 6){
        echo "Aprovado";
     } else if ($nota <= 5) {
        echo "Reprovado";
    }
}
    ?>
</body>

</html>