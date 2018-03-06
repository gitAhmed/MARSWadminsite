<?php
session_start();
if(!isset($_SESSION['user']))
    header("Location: index.php?error=Please Sign In again!");

require_once ("php/config.php");


$account = $_GET['account'];

$query = "SELECT * FROM `incentive` WHERE `id` = '$account'";
 $result= mysqli_query($con,$query);
   $row = mysqli_fetch_assoc($result);
   $id 		= $row['id'];
   $title 	= $row['title'];
   $points 	= $row['points'];
   $instructor 	= $row['instructor'];
   $description = $row['description'];

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
							Ahmed.
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


		
		

		 <!-- edit form column -->
      <div class="col-md-9 personal-info">
        
        <h3>Edit Account</h3>
        
        <form class="form-horizontal" role="form" action="php/editing-incentive.php?id=<?php echo $id;?>" method="post">

        	

          <div class="form-group">
            <label class="col-lg-3 control-label">Title:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="<?php
echo $title ;?>" name="title">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Points:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="<?php
echo $points ;?>" name="points">
            </div>
          </div>
        
          <div class="form-group">
            <label class="col-lg-3 control-label">Instructor:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="<?php
echo $instructor ;?>" name="instructor">
            </div>
          </div>
          
          
          <div class="form-group">
            <label class="col-md-3 control-label">description:</label>
            <div class="col-md-8">
              <textarea class="form-control" type="description" value="<?php
echo $description ;?>" name="description"> </textarea>
            </div>
          </div>
          
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" value="Save Changes">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>



	
		
		<!-- lets do some work here... -->
		<!-- Footer -->
		<footer class="main">
			
			&copy; 2018 <strong>MARSW</strong> Admin Site.
		
		</footer>
	</div>

	
	
</div>

<!-- Imported styles on this page -->
	<link rel="stylesheet" href="assets/js/datatables/datatables.css">
	<link rel="stylesheet" href="assets/js/select2/select2-bootstrap.css">
	<link rel="stylesheet" href="assets/js/select2/select2.css">



	<!-- Bottom scripts (common) -->
	<script src="assets/js/gsap/TweenMax.min.js"></script>
	<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/neon-api.js"></script>

		<!-- Imported scripts on this page -->
	<script src="assets/js/datatables/datatables.js"></script>
	<script src="assets/js/select2/select2.min.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="assets/js/neon-custom.js"></script>


	<!-- Demo Settings -->
	<script src="assets/js/neon-demo.js"></script>

</body>
</html>