<!DOCTYPE html>
<html>
<body>

<?php
$a=2;
$b=6;
$c=7;
//echo(var_dump(is_string($a)));
if(is_string($a)==true || is_string($b)==true || is_string($c)==true){
	echo("blad");
}
else if($a<=0 || $b<=0 || $c<=0){
	echo("blad");
	
}
else{
	if($a+$b>$c && $c+$b>$a && $c+$a>$b){
		echo("mozna zbudowac trojkat");
	}
	else{
		echo("nie mozna zbudowac trojkata");
	}
}


	


?> 



</body>
</html>
