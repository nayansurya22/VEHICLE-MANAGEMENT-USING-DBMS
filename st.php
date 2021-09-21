<!DOCTYPE html>
<html>
<head>
	<link href="themes/redmond/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
	<link href="scripts/jtable/themes/lightcolor/blue/jtable.css" rel="stylesheet" type="text/css" />
	<script src="scripts/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script src="scripts/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
    <script src="scripts/jtable/jquery.jtable.js" type="text/javascript"></script>
</head>
<body>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Vehicle Model / Manufacturer</li>
			</ol>
 
 <?php
$hostname="localhost";
$user_name="root";
$password="";
$db="dbvehicle";
$con=mysqli_connect($hostname,$user_name,$password,$db);

if(mysqli_connect_error())
{
echo "Failed to connect MYSQL phpMyAdmin Database".mysqli_connect_error();
}
$result=mysqli_query($con,"CALL model_pro()");
echo"<center>";
echo"<select>";
echo"<option>------------------------------------------------------------<h2>message details</h2>----------------------------------------------------</option>";
while($row=mysqli_fetch_array($result))
{

echo"<option value='$row[model_id]','$row[model_name]' ,'$row[manufacturer_name]'>   $row[model_id]-------- $row[model_name]---------- $row[manufacturer_name] </option>";
}
echo"</select>";
echo"</table>";
echo"</center>";
mysqli_close($con);
?>   