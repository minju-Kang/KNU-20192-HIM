<doctype html>
<html>
<head>
<title>sign up page</title>
</head>
<body>
<form name="join" method="post" action="memberSave.php">
 <h1>input your information</h1>
 <table border="1">
  <tr>
   <td>ID</td>
   <td><input type="text" size="30" name="ID"></td>
  </tr>
  <tr>
   <td>Password</td>
   <td><input type="password" size="30" name="PW"></td>
  </tr>
  <tr>
   <td>Name</td>
   <td><input type="text" size="12" maxlength="10" name="Name"></td>
  </tr>
  <tr>
   <td>Gender</td>
   <td><label><input type="checkbox" name="Gender" value="F">F</label>
   <label><input type="checkbox" name="Gender" value="M">M</label></td>
  </tr>
  <tr>
   <td>tel</td>
   <td><input type="text" size="30" name="Tel"></td>
  </tr>
  <tr>
   <td>address</td>
   <td><input type="text" size="30" name="Address"></td>
  </tr>
  <tr>
   <td>Doctor?</td>
   <td><label><input type="checkbox" name="Doc" value="YES">YES</label>
   <label><input type="checkbox" name="Doc" value="NO">NO</label></td>
  </tr>
  <tr>
   <td>code</td>
   <td><input type="text" size="30" name="Code"></td>
  </tr>
 </table>
 <input type=submit value="submit"><input type=reset value="rewrite">
</form>
</body>
</html>