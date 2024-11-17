<?php


$Array=[10,20,30,40,50];

print("Array All Elements:<br>");

for($i=0;$i<sizeof($Array);$i++)
{

    print($Array[$i]);
    print("<br>");

}

$element=10;
print("Search element:");
print($element);
print("<br>");



for($i=0;$i<sizeof($Array);$i++)
{
   if($Array[$i]==$element)
   {

    print("Elements Found!");
    return 0;

   }



}
print("Elements not Found!");

?>