<?php
$cities=array("chennai","trichy","pune");


sort($cities);

$len=count($cities);


for($x=0;$x<$len;$x++){
  echo $cities[$x]."\n";
}


?>