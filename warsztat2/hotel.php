<!DOCTYPE html>
<html>
<body>
<form name="form" action="hotel.php" method="post">
<select name="test">
    <option value="1">
        1
    </option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    </select>
<input type="submit" value="Wyślij" />
</form>


<?php
switch($_POST['test']){
   
    case '1': echo("<table border='1'
    <tr>
        <th>nr</th>
        <th>imie</th>
        <th>nazwisko</th>
        <th>adres</th>
        <th>karta kredytowa</th>
        <th>e-mail</th>
        <th>data</th>
        <th>dodatkowe lozko dla dziecka</th>
        <th>klimatyzacja</th>
    </tr>
    <tr>
        <td>1</td>
        <td><input type='text'</td>
        <td><input type='text'</td>
        <td><input type='text'</td>
        <td><input type='text'</td>
        <td><input type='text'</td>
        <td><input type='date' value='2019-07-22' min='2019-07-22' max='2100-01-1'></td>
        <td><select><option >nie</option><option >tak</option></select></td>
        <td><select><option >nie</option><option >tak</option></select></td>
    </tr></table>");break;
    case '2':echo("<table border='1'
    <tr>
        <th>nr</th>
        <th>imie</th>
        <th>nazwisko</th>
        <th>adres</th>
        <th>karta kredytowa</th>
        <th>e-mail</th>
        <th>data</th>
        <th>dodatkowe lozko dla dziecka</th>
        <th>klimatyzacja</th>
    </tr>
    <tr>
        <td>1</td>
        <td><input type='text'</td>
        <td><input type='text'</td>
        <td><input type='text'</td>
        <td><input type='text'</td>
        <td><input type='text'</td>
        <td><input type='date' value='2019-07-22' min='2019-07-22' max='2100-01-1'></td>
        <td><select><option >nie</option><option >tak</option></select></td>
        <td><select><option >nie</option><option >tak</option></select></td>
    </tr>
    <tr>
        <td>2</td>
        <td><input type='text'</td>
        <td><input type='text'</td>
        <td><input type='text'</td>
        <td><input type='text'</td>
        <td><input type='text'</td>
        <td><input type='date' value='2019-07-22' min='2019-07-22' max='2100-01-1'></td>
        <td><select><option >nie</option><option >tak</option></select></td>
        <td><select><option >nie</option><option >tak</option></select></td>
    </tr></table>");break;
    case '3': echo("<table border='1'
    <tr>
        <th>nr</th>
        <th>imie</th>
        <th>nazwisko</th>
        <th>adres</th>
        <th>karta kredytowa</th>
        <th>e-mail</th>
        <th>data</th>
        <th>dodatkowe lozko dla dziecka</th>
        <th>klimatyzacja</th>
    </tr>
    <tr>
        <td>1</td>
        <td><input type='text'</td>
        <td><input type='text'</td>
        <td><input type='text'</td>
        <td><input type='text'</td>
        <td><input type='text'</td>
        <td><input type='date' value='2019-07-22' min='2019-07-22' max='2100-01-1'></td>
        <td><select><option >nie</option><option >tak</option></select></td>
        <td><select><option >nie</option><option >tak</option></select></td>
    </tr>
    <tr>
        <td>2</td>
        <td><input type='text'</td>
        <td><input type='text'</td>
        <td><input type='text'</td>
        <td><input type='text'</td>
        <td><input type='text'</td>
        <td><input type='date' value='2019-07-22' min='2019-07-22' max='2100-01-1'></td>
        <td><select><option >nie</option><option >tak</option></select></td>
        <td><select><option >nie</option><option >tak</option></select></td>
    </tr>
    <tr>
        <td>3</td>
        <td><input type='text'</td>
        <td><input type='text'</td>
        <td><input type='text'</td>
        <td><input type='text'</td>
        <td><input type='text'</td>
        <td><input type='date' value='2019-07-22' min='2019-07-22' max='2100-01-1'></td>
        <td><select><option >nie</option><option >tak</option></select></td>
        <td><select><option >nie</option><option >tak</option></select></td>
    </tr></table>");break;

      
    case '4':echo("<table border='1'
    <tr>
        <th>nr</th>
        <th>imie</th>
        <th>nazwisko</th>
        <th>adres</th>
        <th>karta kredytowa</th>
        <th>e-mail</th>
        <th>data</th>
        <th>dodatkowe lozko dla dziecka</th>
        <th>klimatyzacja</th>
    </tr>
    <tr>
        <td>1</td>
        <td><input type='text'</td>
        <td><input type='text'</td>
        <td><input type='text'</td>
        <td><input type='text'</td>
        <td><input type='text'</td>
        <td><input type='date' value='2019-07-22' min='2019-07-22' max='2100-01-1'></td>
        <td><select><option >nie</option><option >tak</option></select></td>
        <td><select><option >nie</option><option >tak</option></select></td>
    </tr>
    <tr>
        <td>2</td>
        <td><input type='text'</td>
        <td><input type='text'</td>
        <td><input type='text'</td>
        <td><input type='text'</td>
        <td><input type='text'</td>
        <td><input type='date' value='2019-07-22' min='2019-07-22' max='2100-01-1'></td>
        <td><select><option >nie</option><option >tak</option></select></td>
        <td><select><option >nie</option><option >tak</option></select></td>
    </tr>
    <tr>
        <td>3</td>
        <td><input type='text'</td>
        <td><input type='text'</td>
        <td><input type='text'</td>
        <td><input type='text'</td>
        <td><input type='text'</td>
        <td><input type='date' value='2019-07-22' min='2019-07-22' max='2100-01-1'></td>
        <td><select><option >nie</option><option >tak</option></select></td>
        <td><select><option >nie</option><option >tak</option></select></td>
    </tr>
    <tr>
        <td>4</td>
        <td><input type='text'</td>
        <td><input type='text'</td>
        <td><input type='text'</td>
        <td><input type='text'</td>
        <td><input type='text'</td>
        <td><input type='date' value='2019-07-22' min='2019-07-22' max='2100-01-1'></td>
        <td><select><option >nie</option><option >tak</option></select></td>
        <td><select><option >nie</option><option >tak</option></select></td>
    </tr></table>");break;
    
    }?>



</body>
</html>

