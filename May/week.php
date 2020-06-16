<?php

$week = ['月','火','水','木','金'];
$week[5] = '土';

$week[] = '日';
array_push($week, '海', '紙',); //どんどんたす
print($week[7]);
echo '<br>';
?>


<?php

$prefs = ['神奈川', '東京', '千葉', '群馬'];
print($prefs[0]);

$pref = array_shift($prefs);
// print_r($pref);
print_r($prefs);
echo '<br>';

$pref =array_pop($prefs);
print($pref);
print_r($prefs);

$r_prefs = array_reverse($prefs);
print_r($prefs);

?>