<?php
$name = "Tanaka";
setValue($name, "Suzuki");
echo $name;                 // Suzuki と出力される

function setValue(&$value, $str) {
    $value = $str;
}

?>

<?php


// $name = "tanaka";
// setValue($name, "suzuki");
// echo $name;
// function setValue(&$value, $str) {
//     $value = $src;
// }
?>