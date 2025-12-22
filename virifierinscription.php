<?php
include "config.php";
include "crud.php";
session_start();

if (isset($_POST['submit'])) {
        
if(virifer_email($connction,$_POST)==''){
   
    $name = $_POST['name'];
    $email= $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    if (empty($name||$email||$password)) {
        header("Location:Inscription.php");
    }
    $sql = " INSERT INTO users (name,email,password) VALUES('$name','$email','$password')";
    $f = mysqli_query($connction,$sql);
    
    if ($f) {
         $fu = virifer_email($connction,$_POST);
        var_dump(virifer_email($connction,$_POST));
        var_dump($fu ['id']);

        $_session['id'] = $fu ['id'];
        $id = $_session['id'];
        var_dump($_session);
        
        header("Location: courses_list.php?id=".$id);
        
    }else{header("Location:Inscription.php");}

}else{
     header("Location:login.php");
}
    
}
if (!isset($_POST['submit'])) {
        

}
?>