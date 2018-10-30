<?php 
	if(isset($_POST['submit'])){
		extract($_POST);
	?>
	<script type="text/javascript">
		alert("Congradulation Mr/Mrs <?php echo $user; ?>");
		window.location.href = "index.php";
	</script>
	<?php
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>White Space Validation | Email Validation</title>

<script type="text/javascript">
	function check(){
	
		//-------------------------- WhiteSpace Validation Start ----------------------------
		
		var obj = document.getElementById('txtState').value;
		var t = /^[^-\s][a-zA-Z0-9_\s-]+$/;
			if( obj == "" ) {
				alert("Enter Your User Name !!");
				return false;
			} 
			else if(!t.test(obj)){
				alert("Sorry !! Whitespaces, Alphanumerics & Numbers Are Not Allowed.");
				return false;
			} 
		
		//-------------------------- Email Validation Start ----------------------------
		
		var email = document.getElementById('email').value;
		var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		
			if(email == "" ){
				alert("Enter Your Email Id !!");
				return false;
			} else if(!emailReg.test(email)){
				alert("Sorry !! Enter valid Email.");
				return false;
			}
		
        return true;
	}
   
</script>

</head>

<body>
	<br /><br /><br />
	<center>
	<font color="#0066FF" size="5"> <b>WhiteSpace/Email Validation</b> </font><br /><br />	
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<table>
				<tr>
					<th align="right"> User Name : <input type="text" id="txtState" name="user" placeholder="  * Enter Your Name"/></th> <br />
				</tr>
				
				<tr>
					<th align="right"> <br />Email Id : <input type="text" name="email" id="email" placeholder="  * Enter Your Valid Email" /></th>
				</tr>
				
				<tr>
					<th align="center"> <br /><input type="submit" name="submit" value="Submit" onclick="return check();"/></th>
				</tr>
			</table>
		</form>
		
	</center>

</body>
</html>
