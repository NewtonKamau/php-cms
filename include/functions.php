<?php 
function redirectTo($new_location){
	header("Location:".$new_location);
	exit;
}

 ?>
