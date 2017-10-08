<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Aula - 05</title>
</head>
<body>
<div>
    <pre>
        <?php
            require_once 'Banco.php';
            $p1 = new Banco(); //Jubileu
            $p2 = new Banco(); // Creuza
            $p1->abrirConta("CC");
            $p1->setNumConta(1111);
            $p1->setDono("Jubileu");
            $p2->abrirConta("CP");
            $p2->setNumConta(2222);
            $p2->setDono("Creuza");

            $p1->depositar(300);
            $p2->depositar(500);

            $p2->sacar(100);
            $p1->sacar(338);

            $p1->pagarMensal();
            $p2->pagarMensal();

            $p1->fecharConta();
            print_r($p1);
            print_r($p2);

        ?>
    </pre>
</div>
</body>
</html>