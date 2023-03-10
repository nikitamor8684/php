<?php

session_start();
    $_SESSION['NM']='$adminname';
header("location:welcome");
?>