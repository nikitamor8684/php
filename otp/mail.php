<!-- sbqivzwxslrrcmgz -->



<?php
include "conn6.php";
session_start();
if(isset($_SESSION['ab'])){
    $otp1=$_SESSION['ab'];
    $sql="SELECT * FROM otp where otp=$otp1";
    $result=mysqli_query($conn6,$sql);
    if($result->num_rows > 0){
                while($row=$result->fetch_assoc()){
                    $email=$row['email'];
                    $pass=$row['password'];
                }}
    echo "$otp1";

    $sql1="SELECT * FROM login where email='$email' AND password='$pass'";
    $result1=mysqli_query($conn6,$sql1);
 
else{
    header('location:login.php');

}
}



$receiver=$email;

$subject = "Email Test via PHP using Localhost";
$body = "Hi, there...This is a test email send from Localhost.otp is $otp1";
$sender = "From:neerajmor8684@gmail.com";



if(mail($receiver, $subject, $body, $sender)){
    echo "Email sent successfully to $receiver";
  
    echo "$otp1";   
}else{
    echo "Sorry, failed while sending mail!";
}

?>

</body>
</html>