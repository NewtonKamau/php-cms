<<?php 
//function to get the current time
$currentTime=time();
//function to format date and time
$DateTime=strftime("%d-%B-%Y %h:%m", $currentTime);
//method to get the local time to our system
date_default_timezone_set("Africa/Nairobi");

 ?>