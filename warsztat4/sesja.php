<?php

session_start();
$myLogin= "login";
$myPasword= "password";



if(isset($_POST['logowanie']))
    {
        $Login= $_POST['login'];
        $Pasword= $_POST['password'];
        if($myPasword==$Pasword and $myLogin==$Login){
       
       

            setcookie('login',$Login,time()10000);
            session_start();
            $_SESSION['login']=$Login;
            
            header("location: welcome.php");
        }
       else{
           echo("invalid login or password");
       }

           
       
   }else{
    header("location: localhost:8080//zjazd1/index.php");
   }




?>