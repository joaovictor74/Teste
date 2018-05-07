<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href = "../_css/estilo.css">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

    <div>
    <?php
        $t = "Variavel gigante porque eu quis fazer desse jeito";
        $r = wordwrap($t , 20,"<br/>");
        echo $r;
        $texto  = "   Teste de  letras       aaa";
        $novo = trim($texto);
        echo "<br/> $novo";
    ?>
     </div>
</body>
</html>

