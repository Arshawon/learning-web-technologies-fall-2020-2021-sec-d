

<?php

if(!isset($_REQUEST['bloodGroup']))

  if(empty($bloodGroup))
  {
      echo "Please Select your Blood Group";
  }
  else {
      $blood =$_REQUEST['bloodGroup'];
      echo "Submit Successful";
  }

?>

