
<?php
 session_start();
 require_once 'connect_him.php';
 
 $ID = $_SESSION['userid'];
	 
	if ($_POST['subbut'] == "basic")
	{
			$weight=$_POST['weight'];
			$food=$_POST['food'];
			$step= $_POST['step'];
			$blood = $_POST['blood'];
			$cholesterol=$_POST['Cholesterol'];
			$sugar=$_POST['sugar'];
			$menstruation=$_POST['menstruation'];

			$sql = "insert into profile";
			$sql1 = $sql." values('$ID','$weight','$food','$step','$blood','$cholesterol','$sugar','$menstruation') ";
      $sql2 = $sql1."ON DUPLICATE KEY UPDATE Id = '$ID', Weight = '$weight', Food = '$food', Steps = '$step', Blood_Pressure = '$blood', Cholesterol = '$cholesterol', Blood_Sugar = '$sugar', Menstruation = '$menstruation'";
      $link->query($sql2);
			if($link->query($sql2)){
			?>      
			<script>
							alert("Modify Success!");document.location.href='login.html';
			</script>
			<?php
			}
			else{
			?>
			<script>
							alert("Fail");history.back();
			</script>

			<?php
			}
	}
	 
	 
	if ($_POST['subbut'] == "emer")
	{
	 
			$insurance=$_POST['insurance'];
			$Parental = $_POST['Parental'];

			$sql = "insert into emergency ";
			$sql1 = $sql."values('$ID','$insurance','$Parental') ON DUPLICATE KEY UPDATE Id = '$ID', Insurance = '$insurance', Parental_Control = '$Parental'";

			if($link->query($sql1)){
			?>      
			<script>
							alert("Modify Success!");document.location.href='login.html';
			</script>
			<?php
			}
			else{
			?>
			<script>
							alert("Fail");history.back();
			</script>

			<?php
			}
	}
	 
	if ($_POST['subbut'] == "curr")
	{
		 
		 $drug=$_POST['drug'];
		 $Vac= $_POST['Vac'];
		 $device = $_POST['device'];
		 $Allergies=$_POST['Allergies'];
		 $diseases=$_POST['diseases'];

		 $sql = "insert into currhealth ";
		 $sql1 = $sql."values('$ID','$drug','$Vac','$device','$Allergies','$diseases')";
		 $sql2 = $sql1."Id = '$ID', Drugs_in_use = '$drug', Vaccination = '$Vac', Medical_Device = '$device',Allergies = '$Allergies',Diseases = '$diseases'";
		 
		if($link->query($sql2)){
			?>      
			<script>
							alert("Modify Success!");document.location.href='login.html';
			</script>
		<?php
		}
		else{
			?>
		<script>
							alert("Fail");history.back();
			</script>

		<?php
		}
	}
	 ?>

