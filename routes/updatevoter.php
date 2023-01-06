<?php
if(isset($_POST))
{
   $name = $_POST['name'];
   $mobile = $_POST['mob'];
   $pass = $_POST['pass'];
   $cpass = $_POST['cpass'];
   $add = $_POST['add'];
   $age = $_POST['age'];
   $gender = $_POST['gender'];
   $image = $_FILES['image']['name'];
   //$tmp_name = $_FILES['image']['tmp_name'];

   $sql = "UPDATE 'user' SET  'name' = '$name', 'mobile' = '$mobile', 'password'= '$pass', 'address'='$add', 'age'= '$age','gender'= '$gender', 'photo'= '$image'";

   $result = $connect->query($sql);
}


?>