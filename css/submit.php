<?php
$username="root";
$password="";
$database=new PDO("mysql:host=localhost;dbname=one;",$username,$password);
if(isset($_POST['send'])){
      $name=$_POST['name'];
      $email=$_POST['email'];
      $password=$_POST['password'];
      $confirm_password=$_POST['confirm_password'];
      $phone=$_POST['phone'];
      $address=$_POST['address'];
      $pizza = $_POST['pizza'];
      $burger = $_POST['burger'];
      $shawarma = $_POST['shawarma'];
      $password = $_POST['password'];
      $confirmPassword = $_POST['confirm_password'];
if ($password === $confirmPassword) {
            $sql=$database->prepare("
      INSERT INTO orders VALUES('id', '$name','$email' , '$password','$confirm_password','$phone','$address','$pizza','$burger','$shawarma');
      ");
      $sql->execute();
      }
else {
      die ("Please check your password");
}
}
?>

