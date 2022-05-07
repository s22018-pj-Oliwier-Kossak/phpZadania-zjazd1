<!DOCTYPE HTML>
<html>  
<body>

<form action="calculator.php" method="post">
liczba1: <input type="text" name="liczba1"><br>
liczba2: <input type="text" name="liczba2"><br>
<input type="radio" id='1' value='add' name="action">dodawanie:
<input type="radio" id='2' value='substract' name="action">odejmowanie: 
<input type="radio" id='2' value='multiplication' name="action">mnozenie:
<input type="radio" id='2' value='divide' name="action">dzielenie:<br>
<input type="submit">
</form>

</body>
</html>

<html>
<body>
<?php 
$value1=$_POST['liczba1'];
$value2=$_POST['liczba2'];
function addFun($value1,$value2){
   $result=$value1+$value2;
   echo("result: $result");
   save($result);
}

function subFun($value1,$value2){
   $result=$value1-$value2;
   echo("result: $result");
   save($result);
}

function multiFun($value1,$value2){
   $result=$value1*$value2;
   echo("result: $result");
  
   save($result);
}

function divFun($value1,$value2){
    $result=$value1/$value2;
    echo("result: $result");
    save($result);
}

function save($result){
    $myfile = fopen("newfileCalcualtor.txt","a") or die ("unable to open file");
    $record="$result \n";
    fwrite($myfile,$record);
    fclose($myfile);
}

?>


</body>
</html>