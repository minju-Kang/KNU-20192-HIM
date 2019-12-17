<?php
 session_start();
 require_once 'connect_him.php';
 
	
  header('Content-Type: text/html; charset=UTF-8');
  header('P3P: CP="NOI CURa ADMa DEVa TAIa OUR DELa BUS IND PHY ONL UNI COM NAV INT DEM PRE"');
 if(!$_SESSION['userid']){
    ?><script>alert("login first");location.replace("login.html");</script>
    <?php
 }
  
 if($_POST['searchid']){ 
  
   // echo $_POST['searchid'];
  
    $myID = $_SESSION['userid'];
    $ID = $_POST['searchid'];
    $sql = "select * from patient_info where ID='" . $ID . "';";
    $sql10 = "select * from shared where A_id = '" . $myID . "' and B_id ='" . $ID . "';";
	$sql11 = "select * from shared where A_id = '" . $ID . "' and B_id ='" . $myID . "';";
    $result = $link->query($sql);
    $result10 = $link->query($sql10);
	$result11 = $link->query($sql11);
	if ($myID == $ID){
		?> <script>alert("not sharing yourself.");history.back();</script><?php
				
	}
	
	else if (mysqli_num_rows($result10)>0||mysqli_num_rows($result11)>0){
		?> <script>alert("already Sharing.");history.back();</script><?php
				
	}
    else if($result) //ID query 성공
     {
        $row = $result->fetch_assoc();
		
        if($row['Id']){ //patient info가 있으면
            $sql6 = "select * from apply_share where A_id = '" . $myID . "' and B_id ='" . $ID . "';";
            $result6 = $link->query($sql6);
                       
            if($result6) //apply_share query 성공
            {
				$row6 = $result6->fetch_assoc();
				if ($row6['B_id']){ //내가 신청한 적 있는지
				?> <script>alert("This is the sharing that has already been applied for.");history.back();</script>
				<?php
				}
				else{ //상대가 신청한 적 있는지
					$sql2 = "select * from apply_share where A_id = '" . $ID . "' and B_id ='" . $myID . "';";
					$result2 = mysqli_query($link,$sql2);
																	
					if($result2)
					{
                        $row2 = $result2->fetch_assoc();
						if ($row2['B_id'])//상대가 먼저 신청한 상황
						{
							$sql3 = "delete from apply_share where A_id = '" . $ID . "' and B_id = '" . $myID . "';";
							$link->query($sql3);
							$sql4 = "insert into shared values('". $myID . "','" . $ID . "');";
							$link->query($sql4);
							?> <script>alert("Shared Success.");history.back();</script>
				<?php
						}
																		
						else{//상대가 신청한 적 없는 상황, 수락 대기 상태
							$sql5 = "insert into apply_share (A_id, B_id)";
							$sql5 = $sql5 . "values('$myID','$ID')";
							$link->query($sql5);
							?> <script>alert("Request Success.");history.back();</script>
				<?php
						}
					}
					else //상대 신청 쿼리 에러
					{
                    ?> <script>alert("result2 failed");history.back();</script>
					<?php
						$sql5 = "insert into apply_share (A_id, B_id)";
						$sql5 = $sql5 . "values('$myID','$ID')";
						$link->query($sql5);
						?> <script>alert("Request Success.");history.back();</script>
				<?php
					}
				}
			}
            else{ //apply_share query 실패
           ?> <script>alert("result6 query failed");history.back();</script>
			<?php
																	
                $sql2 = "select * from apply_share where A_id = '" . $ID . "' and B_id ='" . $myID . "';";
                $result2 = mysqli_query($link,$sql2);
                          
                          
                if($result2)
                {
                    $row2 = $result2->fetch_assoc();
                    if ($row2['B_id'])//이미 얘한테서 신청 받은 상황
                    {
                        $sql3 = "delete from apply_share where A_id = '" . $ID . "' and B_id ='" . $myID . "';";
                        $link->query($sql3);
                        $sql4 = "insert into shared values('". $myID . "','" . $ID . "');";
                        $link->query($sql4);
						?> <script>alert("Shared Success.");history.back();</script>
				<?php
                    }
                            
                    else{//수락 대기
                        $sql5 = "insert into apply_share (A_id, B_id)";
                        $sql5 = $sql5 . "values('$myID','$ID')";
                        $link->query($sql5);
						?> <script>alert("Request Success.");history.back();</script>
				<?php
                    }
                }
                else
                {
                ?> <script>alert("result2 failed");history.back();</script>
				<?php
                    $sql5 = "insert into apply_share (A_id, B_id)";
                    $sql5 = $sql5 . "values('$myID','$ID')";
                    $link->query($sql5);
					?> <script>alert("Request Success.");history.back();</script>
				<?php
                }
            }
									
                        
        }
		else {
		?>              <script>alert("Member with that ID does not exist.");history.back();</script>
		<?php
        }
    }
    else { //ID query error
     ?><script>alert("member ID query error");history.back();</script>
     <?php
    }
 
  
 }
?>
