<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
 <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<?php
 $nome=$_POST[ 'nome'] ?? 'cassio';
 $email=$_POST[ 'email'] ?? '';
 $idade=$_POST[ 'iadade'] ?? '';
 $curso=$_POST[ 'curso'] ?? '';
 if ($nome && $email && $idade && $curso   )
{
    $linha= "noome: $nome | email: $email | 
    idade: $idade | curso: $curso\n";
    file_put_contents( "cadastro.txt",$linha,FILE_APPEND);
 echo "<h1> dados recebidos </h1><br>";
 echo "nome : $nome <br>";
 echo "email : $email <br>";
 echo "idade : $idade <br>";
 echo "curso : $curso <br>";
 echo "<a href='index.html'>Novo cadastro</a>";
}else
{
    echo "Todos os campos são obrigatórios";
}
?>
</body>
</html>