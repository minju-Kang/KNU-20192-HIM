<!DOCTYPE html>
<?php
session_start();
require_once 'connect_him.php';
$ID = $_SESSION['userid'];
?>
<html>
<head>
    <title>record Info.</title>
    <style>
    *{
        margin:0;
        padding: 0;
        box-sizing: border-box;
    }
    html{
        height: 100%;
    }
    body{
        font-family:'Open Sans', Arial, sans-serif;
        font-size: 1rem;
        line-height: 1.6;
        height: 100%;
    }
    .wrap {
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #fafafa;
    }
    .login-form{
        width: 350px;
        margin: 0 auto;
        border: 1px solid #ddd;
        padding: 2rem;
        background: #ffffff;
    }
    .form-input{
        background: #fafafa;
        border: 1px solid #eeeeee;
        padding: 12px;
        width: 100%;
    }
    .form-group{
        margin-bottom: 1rem;
    }
    .form-button{
        background: #68a4c4;
        border: 1px solid #ddd;
        color: #ffffff;
        padding: 10px;
        width: 100%;
        text-transform: uppercase;
    }
    .form-button:hover{
        background: #69c8e7;
    }
    .form-header{
        text-align: center;
        margin-bottom : 2rem;
    }
    .form-footer{
        text-align: center;
    }
    a{
        font-family: 'Open Sans', Arial, sans-serif;
        color: #ffffff;
        text-decoration:none;
    } 
    </style>
</head>
<body>
    <div class="wrap">
	<form>
            <div class="form-header">
                <h3>Record Info</h3>
            </div>
			<?php 
			if ($_POST['info'] == "basic")
			{
				echo '<div class="form-group">
                <input type="text" class="form-input" placeholder="Weight" name="weight">
				</div>
				<div class="form-group">
					<input type="text" class="form-input" placeholder="Food" name="food">
				</div>
				<div class="form-group">
					<input type="text" class="form-input" placeholder="Steps" name="step">
				</div>
				<div class="form-group">
					<input type="text" class="form-input" placeholder="Blood Pressure" name="blood">
				</div>
				<div class="form-group">
					<input type="text" class="form-input" placeholder="Cholesterol" name="Colesterol">
				</div>
				<div class="form-group">
					<input type="text" class="form-input" placeholder="Blood Sugar" name="sugar">
				</div>
				<div class="form-group">
					<input type="text" class="form-input" placeholder="Menstruation" name="menstruation">
				</div>
				<div class="form-group">
					<button class="form-button" type="submit" name="subbut" value="basic"><a href="DBrecord.php">SUBMIT</a></button>
				</div>';
			}
			else if ($_POST['info'] == "emer")
			{
				echo '<div class="form-group">
					<input type="text" class="form-input" placeholder="Insurance" name="insurance">
				</div>
				<div class="form-group">
					<input type="text" class="form-input" placeholder="Parental Control" name="Parental">
				</div>
				<div class="form-group">
					<button class="form-button" type="submit" name="subbut" value="emer"><a href="DBrecord.php">SUBMIT</a></button>
				</div>';
			}
			else if ($_POST['info'] == "curr")
			{
				echo '<div class="form-group">
					<input type="text" class="form-input" placeholder="Drug in Use" name="drug">
				</div>
				<div class="form-group">
					<input type="text" class="form-input" placeholder="Vaccination" name="Vac">
				</div>
				<div class="form-group">
					<input type="text" class="form-input" placeholder="Medical Device" name="device">
				</div>
				<div class="form-group">
					<input type="text" class="form-input" placeholder="Allergies" name="Allergies">
				</div>
				<div class="form-group">
					<input type="text" class="form-input" placeholder="Diseases" name="diseases">
				</div>
				<div class="form-group">
					<button class="form-button" type="submit" name="subbut" value="curr"><a href="DBrecord.php">SUBMIN</a></button>
				</div>';
			}
            
			?>
        </form>
    </div><!--/.wrap-->
</body>
</html>
