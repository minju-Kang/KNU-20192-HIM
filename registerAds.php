<?php
 session_start();
 require_once 'connect_him.php';
 
	
  header('Content-Type: text/html; charset=UTF-8');
  header('P3P: CP="NOI CURa ADMa DEVa TAIa OUR DELa BUS IND PHY ONL UNI COM NAV INT DEM PRE"');
 if(!$_SESSION['userid']){
    ?><script>alert("login first");location.replace("login.html");</script>
    <?php
 }
 
 $allowed_ext = array('jpg','jpeg','png','gif');
 $ID=$_POST['ID'];
 
 if ($ID == $_SESSION['userid'])
 {
	$Date= $_POST['Date'];
	$subject = $_POST['Subject'];
	$content = $_POST['Content'];
 
	$target_dir = "img/slides/";
	$filename = $_FILES['file']['name'];
	$target_file = $target_dir.$filename;
	
	if (file_exists($target_file)) {
		echo "Sorry, file already exists.";
		$uploadOk = 0;
	}
	else{
		if (move_uploaded_file($_FILES['file']['tmp_name'], $target_dir."/".iconv("utf-8","euc-kr",$filename))) {  
			chmod($target_dir."/".iconv("utf-8","euc-kr",$filename),777);
			print "성공적으로 업로드 되었습니다."; 
		} else {  
			print "파일 업로드 실패\n";  
		}
	}
	$sql = "insert into ADS (Id, StartDate, Image, Subject, Content)";
	$sql = $sql . "values('$ID','$Date', '$subject', '$content', '$filename')";

	if($link->query($sql)){
		echo '<br>success inserting';
	}
	else{
		echo '<br>fail to insert sql';
	}
 
 ?>      
  <script>
          alert("will be recorded for three days after image inspecting.");document.location.href='D_login.html'; </script><?php
 }
 else{
	 ?> <script>alert("Input your ID");history.back();</script><?php
 }
?>
