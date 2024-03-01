<?php
// 1. While Loop:

//a. Scrie un program PHP care, folosind un ciclu while, afișează primele 5 numere prime și pătratele acestora.

$x = 2;
while ($count < 5 )
{
    $div_count=0;
    for ( $i=1; $i<=$x; $i++)
    {
        if (($x%$i)==0)
        {
            $div_count++;
        }
    }
    if ($div_count<3)
    {
        echo $x." . ";

        $count=$count+1;
    }
    $x=$x+1;
}
echo"<br>";

echo "Patratele primelor 5 numere prime sunt:";
echo"<br>";

$x = 2;
$x *= 2;
echo $x." . ";

$x = 3;
$x *= 3;
echo $x." . ";

$x = 5;
$x *= 5;
echo $x." . ";

$x = 7;
$x *= 7;
echo $x." . ";

$x = 11;
$x *= 11;
echo $x." . ";
?>  