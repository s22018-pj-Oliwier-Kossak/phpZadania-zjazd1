<!DOCTYPE html>
<html>
<body>

<?php
$a=array(1,3,2);
$b=array(1,3,2);
$x=count($a);
$y=count($b);


while ($x>0){
    for($i=1; $i<$x; $i++){
        if($b[$i]>$b[$i-1]){
            $key=$b[$i-1];
            $b[$i-1]=$b[$i];
            $b[$i]=$key;
        }
        $x--;
    }
}
foreach($b as $brr){
    echo("\t".$brr);
}

while ($y>0){
    for($i=0; $i<$y; $i++){
        if($a[$i]>$a[$i+1]){
            $key=$a[$i+1];
            $a[$i+1]=$a[$i];
            $a[$i]=$key;
        }
        $y--;
    }
}
foreach($b as $arr){
    echo("\t".$arr);
}

?> 

</body>
</html>