<?php
//login 
?>
<title>Login App</title>
<script type="text/javascript" >
function validate(){
	
		var uname = document.forms['loginform']['uname'].value; 
		var pass = document.forms['loginform']['pass'].value;
		
		if(uname == null || uname == ""){
			alert("please enter username!");
			return false;	
		}
		
		if(pass == null || pass == ""){
			alert("please enter password!");
			return false;	
		}
		
	}
</script>

<form  name="loginform" method="POST" onsubmit="return validate()" action="validatelogin.php">
<table align="center" style="padding-top: 100">
<th>
<h4 align="center" style="color: red">Login Form</h4>
</th>
	<tr>
		<td><input type="text" name="uname" placeholder="username"></td>
	</tr>
	<tr>	
		
		<td><input type="password" name="pass"  placeholder="password"></td>	
	</tr>
	<tr align="center">	
		<td><input type="submit" value="Login" style="color:orangered"></td>	
	</tr>

</table>
</form>	