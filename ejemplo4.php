<?php

function numeroperfecto($N)
{
    $sum = 0;

    for ($i = 1; $i < $N; $i++)
    {
        if ($N % $i == 0)
        {
            $sum = $sum + $i;
        }      
    }

    return $sum == $N;
}

$N = 6;
  
if (numeroperfecto($N))
    echo " Es un numero perfecto:";
else
    echo "No es un numero perfecto:";
?>