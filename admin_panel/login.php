<?php
session_start();
/**
 * Created by PhpStorm.
 * User: BDDL-102
 * Date: 4/11/2019
 * Time: 4:28 PM
 */
require ('db_connect.php');

if (isset($_POST['login_btn'])) {
   $email = $_POST['email'];
   $password = $_POST['password'];

   /*$salt = "369874125";
   $encrypt = $salt.$password;
   $password = md5($encrypt);*/

   $query = "select email from users where password =".$password;

   $if_insert = mysqli_query($db,$query);
   if ($if_insert) {
       $data = mysqli_fetch_assoc($if_insert);
       //echo
       $userEmail = $data['email'];
       //echo $userEmail;
       if ($userEmail == $email) {
           $_SESSION['email'] = $userEmail;
           header("Location: dashboard.php");
       } else {
           echo "
            <script> alert('User Not Found!'); </script>
           ";
           $_SESSION['checkLogin'] = "Failed";
           header("Location: index.php");
       }
   } else {
       echo mysqli_error();
   }




}