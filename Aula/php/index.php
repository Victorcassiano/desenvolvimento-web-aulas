<?php
    include_once "myClass.php";

    $cavalo = new Animal("Little boy", 8);
    echo "O cavalinho ", $cavalo -> name, " tem ", $cavalo -> getAge(), " de idade.";

    echo "<br />";
    
    echo Mammal::communicate();
    
    $baleia = new Mammal("Free Willie", 35);
    $baleia -> hasFur = TRUE;
    echo "A baleia ", $baleia -> name, " tem ", $baleia -> getAge(), " de idade.";
    echo "<br />";
    echo "A baleia ", $baleia -> hasFur ? "tem pelos" : "não tem pelos", " e pesa ", $baleia::$peso, " kg.";




?>