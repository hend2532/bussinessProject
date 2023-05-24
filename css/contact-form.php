<?php
$username="root";
$password="";
$database=new PDO("mysql:host=localhost;dbname=one;",$username,$password);
if(isset($_POST['send'])){
   $name=$_POST['name'];
   $email=$_POST['email'];
   $subject=$_POST['subject'];
   $message=$_POST['message'];
   $sql=$database->prepare("
   INSERT INTO contact VALUES( '$name','$email' , '$subject','$message');
   ");
   $sql->execute();
   }
   ?>