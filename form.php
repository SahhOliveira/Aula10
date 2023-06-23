<!DOCTYPE html>
<html> 
    <head> 
        <title>Documento teste - Form</title>
    </head>
    <body> <!-- Determina o inicio do corpo do documento   -->
        <h1> Resultado do Form! </h1>

        <h3>Nome: <?= $_GET["nome"] ?> </h3> 
        <h3>Endereço: <?= $_GET["endereco"] ?> </h3>
        <h3>Cep: <?= $_GET["cep"] ?> </h3> 
        <h3>Telefone: <?= $_GET["telefone"] ?> </h3>
        <h3>Bairro: <?= $_GET['bairro'] ?> </h3>
        <h3>Cidade: <?= $_GET['cidade'] ?> </h3>


    </body>
</html>