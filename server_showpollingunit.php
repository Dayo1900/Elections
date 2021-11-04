<?php

$servername="localhost";
$username="id17048003_gahs";
$password="Temitope.1900";
$databasename="id17048003_customer";


$connect=mysqli_connect($servername, $username, $password, $databasename);

if(!$connect)
{
die("Unable to connect to server");
}



$PU_PDP="SELECT SUM(party_score) FROM announced_pu_results WHERE 
party_abbreviation='PDP' AND polling_unit_uniqueid='$polling_unit'";

$PDPresult=mysqli_query($connect, $PU_PDP);

while($showPDP=mysqli_fetch_assoc($PDPresult))  //fetch associative array
{
$_SESSION['PDP']=$showPDP['SUM(party_score)'];
}


$PU_LABOUR="SELECT SUM(party_score) FROM announced_pu_results WHERE 
party_abbreviation='LABOUR' AND polling_unit_uniqueid='$polling_unit'";

$LABOURresult=mysqli_query($connect, $PU_LABOUR);

while($showLABOUR=mysqli_fetch_assoc($LABOURresult))
{
$_SESSION['LABOUR']=$showLABOUR['SUM(party_score)'];
}


$PU_CPP="SELECT SUM(party_score) FROM announced_pu_results WHERE 
party_abbreviation='CPP' AND polling_unit_uniqueid='$polling_unit'";

$CPPresult=mysqli_query($connect, $PU_CPP);

while($showCPP=mysqli_fetch_assoc($CPPresult))
{
$_SESSION['CPP']=$showCPP['SUM(party_score)'];
}


$PU_ANPP="SELECT SUM(party_score) FROM announced_pu_results WHERE 
party_abbreviation='ANPP' AND polling_unit_uniqueid='$polling_unit'";

$ANPPresult=mysqli_query($connect, $PU_ANPP);

while($showANPP=mysqli_fetch_assoc($ANPPresult))
{
$_SESSION['ANPP']=$showANPP['SUM(party_score)'];
}



$PU_DPP="SELECT SUM(party_score) FROM announced_pu_results WHERE 
party_abbreviation='DPP' AND polling_unit_uniqueid='$polling_unit'";

$DPPresult=mysqli_query($connect, $PU_DPP);

while($showDPP=mysqli_fetch_assoc($DPPresult))
{
$_SESSION['DPP']=$showDPP['SUM(party_score)'];
}



$PU_ACN="SELECT SUM(party_score) FROM announced_pu_results WHERE 
party_abbreviation='ACN' AND polling_unit_uniqueid='$polling_unit'";

$ACNresult=mysqli_query($connect, $PU_ACN);

while($showACN=mysqli_fetch_assoc($ACNresult))
{
$_SESSION['ACN']=$showACN['SUM(party_score)'];
}




$PU_PPA="SELECT SUM(party_score) FROM announced_pu_results WHERE 
party_abbreviation='PPA' AND polling_unit_uniqueid='$polling_unit'";

$PPAresult=mysqli_query($connect, $PU_PPA);

while($showPPA=mysqli_fetch_assoc($PPAresult))
{
$_SESSION['PPA']=$showPPA['SUM(party_score)'];
}




$PU_CDC="SELECT SUM(party_score) FROM announced_pu_results WHERE 
party_abbreviation='CDC' AND polling_unit_uniqueid='$polling_unit'";

$CDCresult=mysqli_query($connect, $PU_CDC);

while($showCDC=mysqli_fetch_assoc($CDCresult))
{
$_SESSION['CDC']=$showCDC['SUM(party_score)'];
}



$PU_JP="SELECT SUM(party_score) FROM announced_pu_results WHERE 
party_abbreviation='JP' AND polling_unit_uniqueid='$polling_unit'";

$JPresult=mysqli_query($connect, $PU_JP);

while($showJP=mysqli_fetch_assoc($JPresult))
{
$_SESSION['JP']=$showJP['SUM(party_score)'];
}


mysqli_close($connect);
