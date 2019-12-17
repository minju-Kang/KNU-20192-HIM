<?php               
	require_once 'connect_him.php';
	
	session_start();
	
	$ID = $_SESSION['user_id'];
	$Year = $_POST['FirstSelectYear'];
	$Month = $_POST['FirstSelectMonth'];
	$Date = $_POST['FirstSelectDay'];
	$Content = $_POST['content'];
	
	$sql = "insert into SCHEDULE values('$ID', $Year, $Month, $Date, '$Content')";
	
	if(mysqli_query($link, $sql)) {
    echo "success inserting";
  } else {
    echo "fail to insert sql";
  }
  
  echo "<script> alert('schedule saved'); </script>";
  
  echo "<script> document.location.href = 'P_schedule.php'; </script>";
?>