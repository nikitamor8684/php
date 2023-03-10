<?php
session_start();
if(isset($_SESSION['NM'])){

    echo "welcome <a href='logout'>logout</a>";
}

else{
    header("location:home");
}

?>