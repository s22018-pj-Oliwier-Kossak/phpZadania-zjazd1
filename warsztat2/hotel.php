<!DOCTYPE html>
<html>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <br>
  Surname: <input type="text" name="Sname">
  <br>
  Karta kredytowa: <input type="text" name="karta">
  <br>
  email: <input type="text" name="email">
  <br>
  dodatkowe łóżko: <select name="łóżko"><option >nie</option><option >tak</option></select>
  <br>
  klimatyzacja : <select  name="klimatyzacja"><option >nie</option><option >tak</option></select>
  <br>
  data: <input type='date' name='data' value='2019-07-22' min='2019-07-22' max='2100-01-1'>
  <br>
  liczba osób:<select name="test">
    <option value="1">
        1
    </option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    </select>
<input type="submit" name='submit' value="przeslij" />
</form>

<?php


    echo("podsumowanie rezerwacji: <br>");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $liczba=$_POST['test'];
        $data = $_POST['data'];
        $lozko=$_POST['łóżko'];
        $klimatyzacja=$_POST['klimatyzacja'];
        $name = $_POST['fname'];
        if (empty($name)) {
            echo "Name is empty";
            echo('<br>');
        } else {
            echo("imie: $name");
            echo('<br>');
        }
        
        $Sname = $_POST['Sname'];
        if (empty($Sname)) {
            echo "Suname is empty";
            echo('<br>');
        } else {
            echo("nazwisko: $Sname");
            echo('<br>');
        }

        $karta = $_POST['karta'];
        if (empty($karta)) {
            echo "karta is empty";
            echo('<br>');
        } else {
            echo("karta: $karta");
            echo('<br>');
        }

        $email = $_POST['email'];
        if (empty($email)) {
            echo "email is empty";
            echo('<br>');
        } else {
            echo ("email: $email");
            echo('<br>');
        }

        if($lozko=="nie"){
            echo("dodatkowa łóżko: nie <br>");
        }
        else{
            echo("dodatkowa łóżko: tak <br>");
        }

        if($klimatyzacja=="nie"){
            echo("klimatyzacja: nie <br>");
        }
        else{
            echo("klimatyzacja: tak <br>");
        }

        echo ("data: $data");
        echo('<br>');
    
        if($liczba == "1"){
        echo("liczba osob rowna 1");
        
        }
        else if($liczba == "2"){
        echo("liczba osob rowna 2");
        }

        else if($liczba == "3"){
            echo("liczba osob rowna 3");
        }

        else if($liczba == "4"){
            echo("liczba osob rowna 4");
        }
       

    }
?>
   


</body>
</html>

