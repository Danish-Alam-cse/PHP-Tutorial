<?php include('config.php');
    if(isset($_GET['del'])){
      $delete_roll = $_GET['del'];
      $delete_query = mysqli_query($connect,"delete from students where roll='$delete_roll'");

      if($delete_query){
        echo "delete ho gya";
      }
      else{
        echo "delete nhi hua";
      }
    }

?>