<?php

$row=5;
$col=5;

for($i=1;$i<=$row;$i++){

  for($j=1;$j<=$col;$j++){
    $result=$i*$j;
    
    echo sprintf("%4d",$result);
  }
  echo "\n";
}
?>