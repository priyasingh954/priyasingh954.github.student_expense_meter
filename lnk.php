<?php
$date = date ('d-m-y');
?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="blur.css"/>
	<meta charset="utf-8">

</head>
<body bgcolor="#D8D8D8">
	<div class="blur"> </div>
	<font size="5" ><b>System Date: </font><input type="text" name= "sys_date" value="<?php echo $date?>">
<br>

<center>

<style type="text/css">
.form-style-3{
	max-width: 550px;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
.form-style-3 label{
	display:block;
	margin-bottom: 25px;
}
.form-style-3 label > span{
	float: left;
	width: 100px;
	color: #191970;
	font-weight: bold;
	font-size: 13px;
	text-shadow: 1px 1px 1px #fff;
}
.form-style-3 fieldset{
	border-radius: 10px;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	margin: 0px 0px 10px 0px;
	border: 1px solid #00008B;
	padding: 20px;
	background: #B0C4DE;
	box-shadow: inset 0px 0px 15px #6495ED;
	-moz-box-shadow: inset 0px 0px 15px #4682B4;
	-webkit-box-shadow: inset 0px 0px 15px #4682B4;
}
.form-style-3 fieldset legend{
	color: #FFA0C9;
	border-top: 1px solid #00008B;
	border-left: 1px solid #00008B;
	border-right: 1px solid #00008B;
	border-radius: 5px 5px 0px 0px;
	-webkit-border-radius: 5px 5px 0px 0px;
	-moz-border-radius: 5px 5px 0px 0px;
	background: #FFF4F4;
	padding: 0px 8px 3px 8px;
	box-shadow: -0px -1px 2px #F1F1F1;
	-moz-box-shadow:-0px -1px 2px #F1F1F1;
	-webkit-box-shadow:-0px -1px 2px #F1F1F1;
	font-weight: normal;
	font-size: 12px;
}
.form-style-3 textarea{
	width:250px;
	height:100px;
}

	border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border: 1px solid #00008B;
	outline: none;
	color: #6495ED;
	padding: 5px 8px 5px 8px;
	box-shadow: inset 1px 1px 4px #6495ED;
	-moz-box-shadow: inset 1px 1px 4px #6495ED;
	-webkit-box-shadow: inset 1px 1px 4px #6495ED;
	background: #FFEFF6;
	width:50%;
}
.form-style-3  input[type=submit],
.form-style-3  input[type=button]{
	background: #B0C4DE;
	border: 1px solid #00008B;
	padding: 5px 15px 5px 15px;
	color: #00008B;
	box-shadow: inset -1px -1px 3px #6495ED;
	-moz-box-shadow: inset -1px -1px 3px #6495ED;
	-webkit-box-shadow: inset -1px -1px 3px #6495ED;
	border-radius: 3px;
	border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;	
	font-weight: bold;
}




.required{
	color:red;
	font-weight:normal;
}
</style>
</center>
<center>
	
<center><b><br>
<font size="5px"><h1>WELCOME TO KIIT STUDENTS<br> EXPENSES METER</h1></font></b></font></center>
<img src="http://static.kiit.ac.in/schools/sites/29/2018/04/30123526/kiit-only-logo-square-med.png"  height="150" width ="150"><br><a href="front.php"><font size="4px" color="blue"><u>CLICK ON KIIT UNIVERSITY</u></font></a>
<div class="form-style-3">
<form><br>
	<form action="" method="GET">
		
<fieldset align='center'><legend><b><font size='4px' color='191970'> EXPENSE METER</font></b>

</legend><center><u>

	<a href="fixed.php">
	<font size="5px"><b>Fixed Expenses Form</b></font><br>	
</a>

   <a href="notf.php">
   <font size="5px"><b>Not-Fixed Expenses Form</b></font><br>		
</a>

   <a href="fetch.php">
    <font size="5px"><b>Report</b></font><br>		
		</a>

   <a href="link.php">
		<font size="5px"><b>Homepage</b></font><br>
</a></u>

</center></fieldset>


</body>
</html>
