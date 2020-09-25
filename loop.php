<?php

//nomor 1

function satu()
{
    
    for($x=1;$x<=10;$x++)
    {
        if($x>3){
            if($x>7){
                echo $x;
            }else{
                continue;
            }
            
        }else{
            echo $x;
        }
    }
}
satu();

echo PHP_EOL;

//nomor 2


function dua()
{
        
for($x=5;$x>=1;$x--)
{
    if($x>=3){
        echo $x;

    }else{
        echo "*";
    }

}
}
dua();

echo PHP_EOL;

function tiga()
{
    for($x=1;$x<=4;$x++)
    {
        if($x % 2 == 0){
            echo $x."b"; 
        }else{
            echo $x."a";
        }
    }
}
tiga();

echo PHP_EOL;



// function dua()
// {
//     $i=1;
//     while($i<=4){
    
//         if($i % 2 == 0){
//             echo $i."B";
    
//         }else{
//             echo $i."A";
//         }
//         $i++;
//     } 
// }
// dua();

// echo PHP_EOL;





//nomor 4

function empat()
{
    for($x=1;$x<=7;$x++)
    {
        if($x>3){
            if($x==7){
                echo $x;
            }else{
                echo "A";
            }
        }else{
            echo $x;
        }
    }
}
empat();

echo PHP_EOL;

//nomor 5

function lima()
{
    for($x=4;$x>=0;$x--)
    {
        if($x<3){
            if($x==1){
                echo $x;
            }else{
                echo "A";
            }
        }else{
            echo $x;
        }
    }
}
lima();

echo PHP_EOL;

//nomor 6


function enam()
{
    for($x=0;$x<=4;$x++)
    {
        if($x>1){
            echo $x;
        }else{
            echo "A";
        }
    }
}
enam();


?>