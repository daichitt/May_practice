<?php
$var1 = "AAA";
$var2 = "BBB";

$name = "var1";
echo $$name;    // AAA が出力される

$name = "var2";
echo $$name;    // BBB が出力される
?>