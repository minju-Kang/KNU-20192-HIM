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
      echo "�� ���� !";
      //��й�ȣ�� �´ٸ� ���� ����
                if($row['PW']==$PW){
                        $_SESSION['userid']=$ID;//���ǿ� ID ����
                        if(isset($_SESSION['userid'])){ //ID �����߾� ? ���� ��� �´ܰ��ڳ�
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
                                alert("���̵� Ȥ�� ��й�ȣ�� �߸��Ǿ����ϴ�.");
                                history.back();
                        </script>
        <?php
                }
 
        }
 
                else{
?>              <script>
                        alert("���̵� Ȥ�� ��й�ȣ�� �߸��Ǿ����ϴ�.");
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
      
      //��й�ȣ�� �´ٸ� ���� ����
                if($row['PW']==$PW){
                        $_SESSION['userid']=$ID;//���ǿ� ID ����
                        if(isset($_SESSION['userid'])){ //ID �����߾� ? ���� ��� �´ܰ��ڳ�
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
                                alert("���̵� Ȥ�� ��й�ȣ�� �߸��Ǿ����ϴ�.");
                                history.back();
                        </script>
        <?php
                }
 
        }
 
                else{
?>              <script>
                        alert("���̵� Ȥ�� ��й�ȣ�� �߸��Ǿ����ϴ�.");
                        history.back();
                </script>
<?php
                }
 
  }
 }


?>
