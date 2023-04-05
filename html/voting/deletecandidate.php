<?php
// $delete= $_GET['deleteid'];
// echo "$delete";

// include "conn7.php";
// // $delete=$_POST['deleteid'];
// // echo "$delete";
// // echo $_POST['deleteid'];

// if(isset($_POST['deleteid'])){
//     $id= $_POST['deleteid'];
//     delete_data();
//     echo "$id";
//     // delete_data($conn7, $id);
// }

// function delete_data($conn7, $id){
// $sql="DELETE FROM  candidate where candidateid='$id'";
// $result=mysqli_query($conn7,$sql);

// }

// // if ($result){

// //   header("location:displaycandidate.php");
// // } 

// }



?>
<?php
include('conn7.php');
if(isset($_POST['deleteid'])){
    $id= $_POST['deleteid'];
    echo "$id";
    // delete_data($conn7, $id);
// }
// delete data query
// function delete_data($conn7, $id){
   
    $query="DELETE from candidate WHERE candidateid=$id";
    $exec= mysqli_query($conn7,$query);

}
?>