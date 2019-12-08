<doctype html>
<?php
 require_once 'connect_him.php';
 
 
 $ID=$_POST['ID'];
 $PW= $_POST['PW'];
 $Doc = $_POST['Doc'];
 $Name=$_POST['Name'];
 $Gender=$_POST['Gender'];
 $Tel=$_POST['Tel'];
 $Address=$_POST['Address'];
 $Code=$_POST['Code'];
 
if($Doc==NO){
 $searchCode = "select ID from doctor_info where ID = '". $Code ."'";
 $result = $link->query($searchCode);
 
 if($row = mysqli_fetch_row($result)){
  $sql = "insert into patient_info (ID, PW, Name, Gender, Tel, Address, Code)";
  $sql = $sql . "values('$ID','$PW','$Name','$Gender','$Tel','$Address','$Code')";
 }
 else{
  echo "<script type='text/javascript'>alert('Code Not Found. Try Again');</script>";
  echo "<script> document.location.href='signUp.php'; </script>";
 }
 
}
else if($Doc==YES){
 $sql = "insert into doctor_info (ID, PW, Name, Gender, Tel, Address)";
 $sql = $sql . "values('$ID','$PW','$Name','$Gender','$Tel','$Address')";
}

if($link->query($sql)){
  echo 'success inserting';
}
else{
  echo 'fail to insert sql';
}
 

echo "<script> document.location.href='login.html'; </script>";


?>
