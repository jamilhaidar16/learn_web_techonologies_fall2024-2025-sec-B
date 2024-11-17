<?php

$n=3;
for($row=1;$row<=$n;$row++)
{
    for($col=1;$col<=$row;$col++)
       {

        print("* ");

       }
  
    print("<br>");

}

print("<br>");


for($row=$n;$row>=1;$row--)
{
    for($col=1;$col<=$row;$col++)
       {

        print($col);
      

       }
  
    print("<br>");

}


$count='A';

for($row='A';$row<='F';$row++)
{
    for($col='A';$col<=$row;$col++)
       {

        print($count);
        $count++;
        if($count=='G')
        {
            return 0;
        }

       }

  
    print("<br>");