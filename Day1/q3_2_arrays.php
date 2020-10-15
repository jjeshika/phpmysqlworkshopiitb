<?php

$a = array(array(2,4),array(3,5));
$b = array(array(6,7),array(1,8));

for ($i=0;$i<2;$i++)
{
  for($j=0;$j<2;$j++)
  { 
    echo $a[$i][$j]+$b[$i][$j]." ";
  }
}
?>