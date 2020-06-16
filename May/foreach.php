<?php
$color_list = ["Red", "Green", "Blue"];
foreach ($color_list as $color) {
    echo "$color\n";   
    echo '<br>';                     // Red, Green, Blue が表示される
}
?>

<?php
$array = ["Sun" => "日","Mon" => "月","Tue" => "火"];
foreach ($array as $key => $value) {
    echo "$key = $value\n";
}

?>