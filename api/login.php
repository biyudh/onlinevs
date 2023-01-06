<?php
    session_start();
    include("connection.php");
    
    $mobile = $_POST['mob'];
    $pass = $_POST['pass'];
   // $role = $_POST['role'];

    $check = mysqli_query($connect, "select * from user where mobile='$mobile' and password='$pass' ");

    if(mysqli_num_rows($check)>0){
       // $getParties = mysqli_query($connect, "select name, photo, votes, id from user where role=2 ");
      $getParties = mysqli_query($connect, "SELECT name, id, votes, mobile, pass, est, photo from party");

        if(mysqli_num_rows($getParties)>0){
            $parties = mysqli_fetch_all($getParties, MYSQLI_ASSOC);
            $_SESSION['parties'] = $parties;
        }
        $data = mysqli_fetch_array($check); 
        $_SESSION['id'] = $data['id'];
        $_SESSION['status'] = $data['status'];
        $_SESSION['data'] = $data;
        echo '<script>
                window.location = "../routes/dashboard.php";
            </script>';
    }
    else{
        echo '<script>
                alert("Invalid credentials!");
                window.location = "../";
            </script>';
    }
   // else
   // {
    echo  '<script> 
         if($login_attempt==0)
         {
            alert("No login attempt available");
         }
         else
         {
            $login_attempt=$login_attempt - 1;
            alert("Login failed, Now only" + $login_attempt + "login attempt available");
            if($login_attempt==0)
            {
                document.getElementById("#mob").disabled = true;
                document.getElementById("#pass").disabled = true;
                document.getElementById("#form1").disabled = true;
            }
         }
    </script>';
    //}
    
?>