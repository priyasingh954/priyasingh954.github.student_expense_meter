<?php
include("connection.php");
error_reporting(0);
?>	



<?php
$date = date ('d-m-y');
?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="blur.css"/>
</head>
<body bgcolor="#D8D8D8">>
	<div class="blur"> </div>
	<font size="5" ><b>System Date: </font><input type="text" name= "sys_date" value="<?php echo $date?>">
<br>

<center>
<img src="https://previews.123rf.com/images/stuartphoto/stuartphoto1403/stuartphoto140301004/26961603-needs-wants-signpost-meaning-necessity-and-desire.jpg"  height="200" width ="200"><center><b><br>
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
.form-style-3 input[type=text],
.form-style-3 input[type=date],
.form-style-3 input[type=datetime],
.form-style-3 input[type=number],
.form-style-3 input[type=search],
.form-style-3 input[type=time],
.form-style-3 input[type=url],
.form-style-3 input[type=email],
.form-style-3 select, 
.form-style-3 textarea{
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
	
<center><b>
<font size="6">NOT FIXED EXPENSES</b></font><br><br></center>
<div class="form-style-3">
<form>

	<form action="" method="GET">
<fieldset align='center'><legend><b><font size='4px' color='191970'>Not Fixed Expenses Form</font></b>
</legend>
<label for="field7"><span>Date <span class="required">*</span></span><input type="date" class="input-field" name="date" value="" /></label>
<label for="field8"><span>Roll no<span class="required">*</span></span><input type="text" class="input-field" name="Roll_no" value="" /></label>

<label for="field1"><span>Food<span class="required">*</span></span><input type="text" name="Food" class="input-field"  value="" /></label>
<label for="field2"><span>Clothes <span class="required">*</span></span><input type="text" name="Clothes" class="input-field"  value="" /></label>
<label for="field3"><span>Movie <span class="required">*</span></span><input type="text" name="Movie" class="input-field"  value="" /></label>
<label for="field1"><span>Gadgets<span class="required">*</span></span><input type="text" name="Gadgets" class="input-field"  value="" /></label>
<label for="field1"><span>Books/Stationary<span class="required">*</span></span><input type="text" name="Books" class="input-field"  value="" /></label>
<label for="field1"><span>Tourism<span class="required">*</span></span><input type="text" name="tourism" class="input-field"  value="" /></label>
<label for="field1"><span>Events Fees<span class="required">*</span></span><input type="text" name="events" class="input-field"  value="" /></label>
<label for="field1"><span>Spots Fees<span class="required">*</span></span><input type="text" name="Sports" class="input-field"  value="" /></label>
<label for="field1"><span>Mobile Recharge<span class="required">*</span></span><input type="text" name="Recharge" class="input-field"  value="" /></label>
<label for="field2"><span><br><br>Remark </span><textarea rows="4" cols="50" name="Remark" form="usrform">
Enter text here...</textarea></label>	

</fieldset>

<label><span> </span><input type="submit" value="Submit" style="font-size:20px;" /></label>
</fieldset>
</form>
</div>


   <a href="lnk.php">
		HOMEPAGE<br><br>
</a>
</center>

<?php
$Roll=$_GET['Roll_no'];
$Food=$_GET['Food'];
$Clothes=$_GET['Clothes'];
$Movie=$_GET['Movie'];
$Remark=$_GET['Remark'];
$Date=$_GET['date'];
$Gadget=$_GET['Gadgets'];
$Book=$_GET['Books'];
$Tourism=$_GET['tourism'];
$Event=$_GET['events'];
$Sport=$_GET['Sports'];
$Recharge=$_GET['Recharge'];



$query="INSERT INTO notf VALUES ('$Food','$Clothes','$Movie','$Remark','$Date','$Gadget','$Book','$Tourism','$Event','$Sport','$Recharge','$Roll')";
$data = mysqli_query($con,$query);
if($data)
{
	echo "data inserted into database";
}
else
{
	echo "not inserted";
}
?>

</body>
</html>
