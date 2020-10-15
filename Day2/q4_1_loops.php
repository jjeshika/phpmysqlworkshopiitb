<?php
for($i=5;$i>=1;--$i)
{
	for($j=1;$j<=5-$i;++$j)
	{
		echo "  ";
	}
	for($j=1;$j<=$i;++$j)
	{
		echo " * ";
	}
	echo "<br>";
}

?>