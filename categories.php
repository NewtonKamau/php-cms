<?php 
require_once("/include/DB.php");
require_once("include/sessions.php");
require_once("include/functions.php");

?>
<<?php 
//calling a method for submit button and including the time from DateTime file 
if (isset($post["submit"])) {
 	$category=mysql_real_escape_string($_post["category"])
$currentTime=time();
$DateTime=strftime("%d-%B-%Y %h:%m", $currentTime);
$DateTime;
$Admin="Newton";
if (empty($category)) {
	$_SESSIONS["ErrorMessage"]="All fields must be field out";
	redirectTo("categories.php");

	
}elseif(strlen($category)>99){
	$_SESSIONS["ErrorMessage"]="The message is too long";
	redirectTo("categories.php");

}else{
	global $ConnectingDB();
	$QUERY="INSERT INTO category(datetime,name,creatorname) VALUES('$datetime','$category','$Admin')";
	$Execute=mysqli_execute($QUERY);
	if ($Execute) {
		$_SESSIONS["successMessage"]="category has been saved";
	redirectTo("categories.php");
	}else{
		$_SESSIONS["ErrorMessage"]="Category not added";
	redirectTo("categories.php");
	}
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
	<script src="js.bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" media="screen" href="css/adminstyles.css" />

</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-2">
				<h1>Newton</h1>
				<ul id="side_menu" class="nav nav-pills nav-stacked">
					<li><a href="/Dashboard.php"><span class="glyficons glyficon-th"></span> &nbsp; Dashboard</a></li>
					<li><a href="/#"><span class="glyficons glyficon-list-alt"></span>&nbsp; Add New Post</a></li>
					<li class="active"><a href="/categories.php"><span class="glyficons glyficon-tags"></span>&nbsp; Categories</a></li>
					<li><a href="/#"><span class="glyficons glyficon-users"></span>&nbsp; Manage Admins</a></li>
					<li><a href="/#"><span class="glyficons glyficon-comment"></span>&nbsp; Comments</a></li>
					<li><a href="/#"><span class="glyficons glyficon-equalizer"></span>&nbsp; Live Blog</a></li>
					<li><a href="/#"><span class="glyficons glyficon-log-out"></span>&nbsp; LogOut</a></li>
				</ul>
                
			</div> <!-- end of side area of the panel-->
			<div class="col-sm-10">
				<h1>Manage Categories</h1>
				<?php echo Message();
				echo successMessage(); ?>
				<div>
					<form action="categories.php" method="post">
						<fieldset>
						<div class="form-group">
							<label for="categoryname">Name:</label>
							<input class="form-control" type="text" name="category" placeholder="Name">
						</div>
						<br>
						<input class="btn btn-primary btn-block" type="submit" name="submit" value="Add New category">
						</fieldset>
					</form>
				</div>
			</div> <!-- end of main area of the panel-->
		</div>
	</div><!-- end of container-->
 <div id="Footer">
 	<hr><p>Theme by | newnyc |&copy:2018-2022 ---All rights reserved.</p>
 	
 </div>


</body>
</html>
 