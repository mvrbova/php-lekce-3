<?php

if ($_SESSION["login"] = false) {
    echo "Přístup zamítnut";}
else {
    echo "Vítejte, admin".$data ['Datum registrace: '].$data ['Souhlas s podmínkami'].$data ['Počet objednávek'];
}

echo <a href="logout.php">"Odhlásit"</a>;
?>

