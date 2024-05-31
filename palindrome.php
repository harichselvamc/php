<?php
$a=0;
$b=1;

for($x=1;$x<8;$x++){
  echo "This is loop $x\n";
  $c=$a+$b;
  echo "$c \n";
  $a=$b;
  $b=$c;
}