<?php
$n1=10;
$n2=20;
$n3=30;

print("The given number is:");
print($n1);
print(',');
print($n2);
print(',');
print($n3);

print("<br>");

if($n1>$n2 & $n1>$n2 )
{
    print("This is the largest number!:");
    print($n1);

}

elseif($n2>$n1 & $n2>$n3 )
{
    print("This is the largest number!:");
    print($n2);

}
else
{
    print("This is the largest number!:");
    print($n3);
}

?>