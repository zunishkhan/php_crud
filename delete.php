<?php
include('config.php');
if(isset($_GET['id']));
$user_id = $_GET['id'];
 
$delete = "DELETE FROM 'userdata' WHERE 'user_id' = $user_id";
$result = $conn->query($delete);

if($result == TRUE){
     ?>
     <script>
        window.alert("Record delete successfully");
        window.location.assign("index.php");
     </script>
     <?php  


      }else{
        ?>
        <script>
           window.alert("Failed to delete record");
           window.location.assign("index.php");
        </script>
        <?php 
      }
?>