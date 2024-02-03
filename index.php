<?php
require 'conn.php';
if(isset($_SESSION['user'])) {
   header('location:../capstone/dashboard/index.php');
   
}else {
    header('location:../capstone/gym-profil/index.php');
}
