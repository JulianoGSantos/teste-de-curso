<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'Conta.php';
        
        $c1 = new Conta();
        $c1->abrirConta("cp");
        $c1->setNumConta(0242);
        $c1->setDono("Juliano");
        $c1->depositar(1000);
        $c1->sacar(200);
        $c1->pagarMensal();
        $c1->fecharConta();
        $c1->sacar(788);
        $c1->fecharConta();
        
        print_r($c1);
        echo"Saldo: {$c1->getSaldo()}";
        ?>
    </body>
</html>
