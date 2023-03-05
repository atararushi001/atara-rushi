<?php
echo "ADDITION OF 2X2 MATRICES <br> ";
$a = array(array(11,4),array(2,3));
$b = array(array(3,2),array(4,11));


for($i = 0; $i < 2; $i++)

{

for($j = 0; $j < 2; $j++)

{

echo $a[$i][$j] + $b[$i][$j]." ";

}

echo "<br>";

}

?>