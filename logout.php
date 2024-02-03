<?php
session_start();
// destroy untuk mengakhiri session start
session_destroy();
// arahkan kembali ke halaman profil web gym
header('location:../capstone/gym-profil/index.php');
?>