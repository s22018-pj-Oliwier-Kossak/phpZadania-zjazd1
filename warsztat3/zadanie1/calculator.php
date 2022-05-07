
<?php
include 'calculatorFunction.php';
switch($_POST['action']){
   case 'add': addFun($value1,$value2);break;
   case 'substract':  subFun($value1,$value2);break;
   case 'multiplication':  multiFun($value1,$value2);break;
   case 'divide':  divFun($value1,$value2);break;
}


?><br>

