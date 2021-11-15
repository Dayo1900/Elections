<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<title>  Elections</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="2011 elections">
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="election.css">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>

<?php

if(isset ($_POST['show_partyresult']))
{
//define variables and set to empty values
$polling_unit="";

//create function to sanitise input values
function check_input($data)
{
$data=trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data;
}

//Sanitise input from users
$polling_unit=check_input($_POST['polling_unit']);


include 'server_showpollingunit.php';
}

?>


<header>
<h2> Election Results</h2>
</header>

<p style="font-size:0.9em; font-family:verdana, sans-serif; text-align:center;">I took my sample data from an election held at Delta state, Nigeria back in 2011. 
I selected some polling units and stored the information in a database.<br>This page queries the database and displays the election results according to polling unit. The code can be found <a href="https://github.com/Dayo1900/Elections.git" style="font-size:0.9em; font-family:verdana, sans-serif;">on this link.</a> </p>
<div class="a">
<form action="elections.php" method="post">

<label for="polling_unit"> Select Polling Unit</label><br><br>
<select name="polling_unit" style="height:2.5em;">
<option value=""> </option>
<option value=8> Polling Unit 8 </option>
<option value=9> Polling Unit 9 </option>
<option value=10> Polling Unit 10 </option>
<option value=11> Polling Unit 11</option>
<option value=12> Polling Unit 12</option>
<option value=13> Polling Unit 13</option>
<option value=15> Polling Unit 15</option>
<option value=16> Polling Unit 16</option>
<option value=18> Polling Unit 18 </option>
<option value=19> Polling Unit 19 </option>
<option value=20> Polling Unit 20 </option>
<option value=21> Polling Unit 21 </option>
<option value=22> Polling Unit 22 </option>
<option value=23> Polling Unit 23 </option>
<option value=24> Polling Unit 24 </option>
<option value=25> Polling Unit 25 </option>
<option value=26> Polling Unit 26 </option>
<option value=27> Polling Unit 27 </option>
</select>
<br><br><br>
<button type="submit" name="show_partyresult"> Show party results</button>
</form>

<br>
<?php
if(isset ($_POST['show_partyresult']))
{
echo "<h6 style='font-family:verdana, sans-serif; font-size:1.05rem;'>Polling Unit: ". $polling_unit ."</h6>";
}
?>

<label> <u> Registered Parties </u></label><br>



<label for="JP">JP:</label>
<span>
<?php 
if(isset ($_POST['show_partyresult']))
{echo $_SESSION['JP']; }
if((isset ($_POST['show_partyresult'])) && (empty($_SESSION['JP']))) {echo "Null";}?> </span>
<br>

<label for="PDP"> PDP:</label>
<span> 
<?php if(isset ($_POST['show_partyresult']))

{echo $_SESSION['PDP'];}

if((isset ($_POST['show_partyresult'])) && (empty($_SESSION['PDP']))) {echo "Null";}?> </span>
<br>

<label for="DPP">DPP:</label>
<span> 
<?php 
if(isset ($_POST['show_partyresult']))
{echo $_SESSION['DPP'];}
if((isset ($_POST['show_partyresult'])) && (empty($_SESSION['DPP']))) {echo "Null";}?> </span>
<br>

<label for="ACN">ACN:</label>
<span>
<?php 
if(isset ($_POST['show_partyresult']))
{echo $_SESSION['ACN']; }
if((isset ($_POST['show_partyresult'])) && (empty($_SESSION['ACN']))) {echo "Null";}?> </span>
<br>

<label for="PPA">PPA:</label>
<span>
<?php 
if(isset ($_POST['show_partyresult']))
{echo $_SESSION['PPA'];}
if((isset ($_POST['show_partyresult'])) && (empty($_SESSION['PPA']))) {echo "Null";}?> </span>
<br>

<label for="CDC">CDC:</label>
<span>
<?php 
if(isset ($_POST['show_partyresult']))
{echo $_SESSION['CDC'];} 
if((isset ($_POST['show_partyresult'])) && (empty($_SESSION['CDC']))) {echo "Null";}?> </span>
<br>

<label for="CPP">CPP:</label>
<span>
<?php 
if(isset ($_POST['show_partyresult']))
{echo $_SESSION['CPP'];} 
if((isset ($_POST['show_partyresult'])) && (empty($_SESSION['CPP']))) {echo "Null";}?> </span>
<br>

<label for="ANPP">ANPP: </label>
<span>
<?php 
if(isset ($_POST['show_partyresult']))
{echo $_SESSION['ANPP'];} 
if((isset ($_POST['show_partyresult'])) && (empty($_SESSION['ANPP']))) {echo "Null";}?> </span>
<br>

<label for="LABOUR">LABOUR: 
</label>
<span>
<?php 
if(isset ($_POST['show_partyresult']))
{echo $_SESSION['LABOUR'];} 
if((isset ($_POST['show_partyresult'])) && (empty($_SESSION['LABOUR']))) {echo "Null";}?> </span>
<br>


</div>

<footer style="text-align: center;"> Created by Dayo Abdul ©2021 </footer>

</body>
</html>
