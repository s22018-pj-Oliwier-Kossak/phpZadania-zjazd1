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


switch($_POST['action']){
   case 'add':  $result=$value1+$value2;break;
   case 'substract':  $result=$value1-$value2;break;
   case 'multiplication':  $result=$value1*$value2;break;
   case 'divide':  $result=$value1/$value2;break;
}
echo("result: $result");
?><br>


</body>
</html>