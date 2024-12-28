

<?php

include_once("../config/dbconn.php");

if (isset($_GET['id'])) {
  $id = intval($_GET['id']); // Use intval to sanitize input
  // Connect to the database
  //include_once("../config/dbconn.php");

  // Fetch the record to display in the form
  $dsql = "DELETE FROM registration WHERE id = $id";
  $result = mysqli_query($conn,$dsql);

  if (!$result) {
      die('Could not get data: ' . mysqli_error($conn));
  }else{
    
    echo ' <script>
      alert("User Deleted");
    </script> ';
  }
  
  
}

?>