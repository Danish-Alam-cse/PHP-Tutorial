<?php include('config.php');
    if(isset($_GET['del'])){
      $delete_roll = $_GET['del'];
      $delete_query = mysqli_query($connect,"delete from students where roll='$delete_roll'");

      if($delete_query){
        header('Location:index.php');
      }
      else{
        echo "delete nhi hua";
      }
    }

?>