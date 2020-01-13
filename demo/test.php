<?php echo '<br>'; echo '<br>';

for ($x = 1; $x < 50; $x+=2) {
  echo "$x\n";
}


echo '<br>'; echo '<br>'; echo '<hr>'; echo '<br>';

$var = 'HELLO!';
$i = 0;
$len = strlen($var);
while($i < $len) {
  echo $var{$i} . '<br>';
  $i++;
}
