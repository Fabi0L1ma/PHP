<?php 

    require("./bibliotecas/lib1/lib1.php");
    require("./bibliotecas/lib2/lib2.php");

    use A\Cliente as C1; // PARA  IMPORTA OS 2 NAMESPACE TEM QUE UTILIZAR A PALAVRA (AS)
    use B\Cliente as C2;

    $c = new C1();

    print_r($c);

    $c = new C2();

    print_r($c);

?>