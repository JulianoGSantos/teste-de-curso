<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'ContaBanco.php';
        
        $c1=new ContaBanco();
        $c1->abrirConta("cc");
        $c1->sacar(50);
        $c1->fecharConta();
        
        echo "</br>saldo: {$c1->getSaldo()}";
        ?>
    </body>
</html>
