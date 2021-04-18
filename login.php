<?php 

$host="localhost";
$user="root";
$password="";
$cookstar="cookstar";

mysql_connect($host,$user,$password);
mysql_select_cookstar($cookstar);

if(isset($_POST['mail'])){
    
    $email=$_POST['mail'];
    $password=$_POST['pass'];
    
    $sql="select * from customers where email='".$email."'AND pass='".$password."' limit 1";
    
    $result=mysql_query($sql);
    
    if(mysql_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>