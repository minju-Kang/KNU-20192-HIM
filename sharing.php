
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
  
    echo $_POST['searchid'];
  
    $myID = $_SESSION['userid'];
    $ID = $_POST['searchid'];
    $sql = "select * from patient_info where ID='" . $ID . "';";
    
    $result = mysqli_query($link,$sql);
    
     if($result)
     {
                $row = mysqli_fetch_assoc($result);
		
                if($row['ID']){
                        $sql6 = "select * from apply_share where A_id = '" . $myID . "' and B_id '" . $ID . "';";
                        $result6 = mysqli_query($link,$sql6);
                        $row6 = mysqli_fetch_assoc($result6);
                        if($result6)
                        {
													if ($row6['B_id']){
														?> <script>
																		alert("no!!!");history.back();
														</script>
													<?php
													}
													else{
													$sql2 = "select * from apply_share where A_id = '" . $ID . "' and B_id '" . $myID . "';";
													$result2 = mysqli_query($link,$sql2);
													$row2 = mysqli_fetch_assoc($result2);
														if ($row2['B_id'])
														{
																$sql3 = "delete from apply_share where A_id = '" . $ID . "' and B_id '" . $myID . "';";
																$link->query($sql3);
																$sql4 = "insert into shared values('". $myID . "','" . $ID . "');";
																$link->query($sql4);
														}
												
														else{
															$sql5 = "insert into apply_share (A_id, B_id)";
															$sql5 = $sql5 . "values('$myID','$ID')";
															$link->query($sql5);
														}
												}
                      }
                      else
                      {
                   ?> <script>
                              alert("Fail T.T");
                      </script>
                 <?php}
                
                        
                }
                else {
          ?>              <script>
                                alert("Cannot find T.T");
                        </script>
        <?php
                    }
  }
 
  
 }
}


?>
