<!DOCTYPE html>
<head>
	<title>  Hospital System </title>
	
	<link href="css/style.css" type="text/css" rel="stylesheet">
	<style>
a:link, a:visited {
  background-color: black;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

</style>
</head>
<body>

<div class="top">
		<div>
		 Contact Us +91 87564 20000 / 01 | abc@hospital.com
		</div>
	</div>
	
	
	

<h1>Data Saved Successfully...</h1><Br>

<b>FirstName :- </b> <?php echo $_POST["firstname"]; ?><br>
<b>LastName :- </b> <?php echo $_POST["lastname"]; ?><br>
<b>Email :- </b> <?php echo $_POST["email"]; ?><br>
<b>Gender :- </b> <?php echo $_POST["gender"]; ?><br>
<b>Mobile No :- </b> <?php echo $_POST["mobile"]; ?><br>
<b>Date :- </b> <?php echo $_POST["date"]; ?><br>
<b>Topic :- </b> <?php echo $_POST["msg"]; ?><br><br><br>

<a href="index.html">Back To Home</a>

</body>
</html>