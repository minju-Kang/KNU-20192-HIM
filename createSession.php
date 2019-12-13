<doctype html>
<?php
 require_once 'connect_him.php';
  
	session_start();
  header('Content-Type: text/html; charset=UTF-8');


 if($_POST['patient']){ 
  
  $ID = $_POST['ID'];//99
  $PW = $_POST['PW'];//99
  
  if($ID == "" || $PW == ""){?>
    <script> alert("type ID or PW"); history.back();</script><?php
	}
  else{
    
    $sql = "select * from patient_info where ID='" . $ID . "';";
    $result = $link->query($sql);
    
		if(mysqli_num_rows($result)){
      $row = mysqli_fetch_assoc($result);
      echo "야 마자 !";
      //비밀번호가 맞다면 세션 생성
                if($row['PW']==$PW){
                        $_SESSION['userid']=$ID;//세션에 ID 저장
                        if(isset($_SESSION['userid'])){ //ID 저장했어 ? 구럼 비번 맞단거자나
                        ?>      <script>
                                        alert("login success");
                                        location.replace("P_login.html");
                                </script>
<?php
                        }
                        else{
                                echo "session fail";
                        }
                }
 
                else {
        ?>              <script>
                                alert("아이디 혹은 비밀번호가 잘못되었습니다.");
                                history.back();
                        </script>
        <?php
                }
 
        }
 
                else{
?>              <script>
                        alert("아이디 혹은 비밀번호가 잘못되었습니다.");
                        history.back();
                </script>
<?php
                }
 
  }
 }
 if($_POST['doctor']){ 
  
  $ID = $_POST['ID'];//99
  $PW = $_POST['PW'];//99
  
  if($ID == "" || $PW == ""){?>
    <script> alert("type ID or PW"); history.back();</script><?php
	}
  else{
    
    $sql = "select * from doctor_info where ID='" . $ID . "';";
    $result = $link->query($sql);
    
		if(mysqli_num_rows($result)){
      $row = mysqli_fetch_assoc($result);
      
      //비밀번호가 맞다면 세션 생성
                if($row['PW']==$PW){
                        $_SESSION['userid']=$ID;//세션에 ID 저장
                        if(isset($_SESSION['userid'])){ //ID 저장했어 ? 구럼 비번 맞단거자나
                        ?>      <script>
                                        alert("login success");
                                        location.replace("D_login.html");
                                </script>
<?php
                        }
                        else{
                                echo "session fail";
                        }
                }
 
                else {
        ?>              <script>
                                alert("아이디 혹은 비밀번호가 잘못되었습니다.");
                                history.back();
                        </script>
        <?php
                }
 
        }
 
                else{
?>              <script>
                        alert("아이디 혹은 비밀번호가 잘못되었습니다.");
                        history.back();
                </script>
<?php
                }
 
  }
 }


?>
