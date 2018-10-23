<<?php 
session_start();
function Message(){
	if (isset($_SESSION["ErrorMessage"])) {
		$Output="<div class=\"allert allert-success\">";

		$Output.=htmlentities($_SESSION["ErrorMessage"]);
		$Output.="</div>";
		//this will stop error message if user is for the first time
		$_SESSION["ErrorMessage"]=null;
		return $Output;
		# code...
	}
}
function successMessage(){
	if (isset($_SESSION["successMessage"])) {
		$Output="<div class=\"allert allert-success\">";

		$Output.=htmlentities($_SESSION["successMessage"]);
		$Output.="</div>";
		//this will stop error message if user is for the first time
		$_SESSION["successMessage"]=null;
		return $Output;
		# code...
	}
}

 ?>