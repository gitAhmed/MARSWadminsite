<?php 
session_start();
if(!isset($_SESSION['user']))
    header("Location: index.php?error=Please Sign In again!");

require_once ("php/config.php");


$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<link rel="icon" href="assets/images/favicon.ico">

	<title>MARSW | Home</title>

	<link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="assets/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/neon-core.css">
	<link rel="stylesheet" href="assets/css/neon-theme.css">
	<link rel="stylesheet" href="assets/css/neon-forms.css">
	<link rel="stylesheet" href="assets/css/custom.css">

	<script src="assets/js/jquery-1.11.3.min.js"></script>

	<!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>
<body class="page-body gray" data-url="http://neon.dev">

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
	
	<div class="sidebar-menu">

		<div class="sidebar-menu-inner">
			
			<header class="logo-env">

				<!-- logo -->
				<div class="logo">
					<a href="home.php">
						<img src="assets/images/logo.png" width="120" alt="" />
					</a>
				</div>

				<!-- logo collapse icon -->
				<div class="sidebar-collapse">
					<a href="#" class="sidebar-collapse-icon"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
						<i class="entypo-menu"></i>
					</a>
				</div>

								
				<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
				<div class="sidebar-mobile-menu visible-xs">
					<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
						<i class="entypo-menu"></i>
					</a>
				</div>

			</header>
			
									
			<ul id="main-menu" class="main-menu">
				<!-- add class "multiple-expanded" to allow multiple submenus to open -->
				<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
				<li class="has-sub">
					<a href="home.php">
						<i class="entypo-camera"></i>
						<span class="title">Manage QRCodes</span>
					</a>
					<ul>
						<li>
							<a href="places.php">
								<span class="title">Manage Places</span>
							</a>
						</li>

						<li>
							<a href="neighborsPage.php">
								<span class="title">Manage Neighbors</span>
							</a>
						</li>

						<li>
							<a href="qrcodesPage.php">
								<span class="title">Manage QRCodes</span>
							</a>
						</li>
						
					</ul>
				</li>



				<li class="has-sub">
					<a href="home.php">
						<i class="entypo-users"></i>
						<span class="title">Manage Accounts</span>
					</a>
					<ul>
						<li>
							<a href="accounts.php?type=student">
								<span class="title">Student Accounts</span>
							</a>
						</li>
						<li>
							<a href="accounts.php?type=instructor">
								<span class="title">Instructor Accounts</span>
							</a>
						</li>
						
					</ul>
				</li>


				<li>
					<a href="incentives.php">
						<i class="entypo-basket"></i>
						<span class="title">Manage Incentives</span>
					</a>
				</li>


			</ul>
			
		</div>

	</div>

	<div class="main-content">

		<div class="row">
		
		<div class="col-md-12 col-sm-4 clearfix hidden-xs">
			<ul class="user-info pull-left pull-none-xsm">
		
					<!-- Profile Info -->
					<li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->
		
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img src="assets/images/member.jpg" alt="" class="img-circle" width="44">
							<?php print $user; ?>
						</a>
						
					</li>
		
				</ul>
		
				<ul class="list-inline links-list pull-right">
		
					<li class="sep"></li>
		
					<li>
						<a href="php/signout.php">
							Log Out <i class="entypo-logout right"></i>
						</a>
					</li>
				</ul>
		
			</div>
		
		</div>


		<div class="row">
			<div class="col-sm-12">
				<div class="well">
					<h1><?php print date("F j, Y"); ?> </h1>
					<h style="color: #008b9c;">Welcome to the Admin site.</h3>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-4 col-sm-4">
				<a href="qrcodes.php">
				<div class="tile-stats tile-black">
					<div class="icon"><i class="entypo-camera"></i></div>
					<div class="num">MANAGE QRCode</div>
					
					<h3>Places of QRCodes.</h3>
					<p>Click here to choose.</p>
				</div>
				</a>
			</div>
		
			<div class="col-md-4 col-sm-4">
				<a href="accounts.php">
				<div class="tile-stats tile-blue">
					<div class="icon"><i class="entypo-users"></i></div>
					<div class="num">MANAGE ACCOUNTS</div>
					
					<h3>Student, Instructor accounts.</h3>
					<p>Click here to manage.</p>
				</div>
			</a>
			</div>
		
		
			<div class="col-md-4 col-sm-4">
				<a href="incentives.php">
				<div class="tile-stats tile-green">
					<div class="icon"><i class="entypo-basket"></i></div>
					<div class="num">MANAGE INCENTIVES</div>
					
					<h3>Manage the incentives.</h3>
					<p>Click to manage.</p>
				</div>	
				</a>	
			</div>
		
		</div>
<hr>
<div class="row">
    
    <div class="col-sm-12">
				<div class="panel panel-primary panel-table" style="position: static; zoom: 1;">
					<div class="panel-heading">
						<div class="panel-title">
							<h3>Top Students</h3>
							<span>Top five highest score of students</span>
						</div>
						
						<div class="panel-options">
							
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
					<div class="panel-body" style="display: block;">	
						<table class="table table-responsive no-margin">
							<thead>
								<tr>
									<th>Student Name</th>
									<th>Score</th>
									<th class="text-center">Status</th>
								</tr>
							</thead>		



    <?php
				$sql = " SELECT distinct * from student order by score desc limit 5 ";

$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      
      
    
    ?>
   

							<tbody>
								<tr>
									<td> <?php echo $row["f_name"]." ".$row["l_name"]; ?> </td>
									<td><?php echo $row["score"]; ?></td>
									<td class="text-center"> - </td>
								</tr>
								
								<?php 
				}
} else {
    echo 'there is no students to list';
}

mysqli_close($con);
?>
			
			
							</tbody>
						</table>
					</div>
				</div>
				
			</div>
    
</div>


	
		<br />
		
		<!-- lets do some work here... -->
		<!-- Footer -->
		<footer class="main">
			
			&copy; 2018 <strong>MARSW</strong> Admin Site.
		
		</footer>
	</div>

	
	
</div>




	<!-- Bottom scripts (common) -->
	<script src="assets/js/gsap/TweenMax.min.js"></script>
	<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/neon-api.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="assets/js/neon-custom.js"></script>


	<!-- Demo Settings -->
	<script src="assets/js/neon-demo.js"></script>

</body>
</html>