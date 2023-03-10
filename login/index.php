<?php

session_start();


if(isset($_SESSION['NM'])){
    // echo $_SESSION['NM'];
    header("location:welcome");
}

else{
    
    // $_SESSION['NM']="NIKITA";

    echo "please login first<a href='sessionset'>set session</a>";
}



?>