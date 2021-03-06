<?php
session_start();
if(!isset($_SESSION['user']))
    header("Location: index.php?error=Please Sign In again!");

$user = $_SESSION['user'];
require_once ("php/config.php");


$account = $_GET['account'];

$query = "SELECT * FROM `student` WHERE `id` = '$account'";
 $result= mysqli_query($con,$query);
   $row = mysqli_fetch_assoc($result);
   $id 		= $row['id'];
   $fname 	= $row['f_name'];
   $lname 	= $row['l_name'];
   $email 	= $row['email'];
   $password 	= $row['password'];

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

	<title>MARSW | QRCodes</title>

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

<?php
                                    if(isset($_GET['succ']))
                                        echo '<div class="alert alert-success" role="alert">'.$_GET['succ'].'</div>';

                                    if(isset($_GET['error']))
                                        echo '<div class="alert alert-danger" role="alert">'.$_GET['error'].'</div>';
                                    ?>

<h3>Add Place</h3>

        
        <form class="form-horizontal" role="form" action="php/addplace.php" method="post">

        	

          <div class="form-group">
        
            <div class="col-md-3">
              <input class="form-control" type="text" placeholder="Place name" name="name">
            </div>
            <div class="col-md-3">
              <input class="form-control" type="text" placeholder="Place weight" name="weight">
            </div>
          
        
          
       
            <div class="col-md-3">
              <input type="submit" class="btn btn-primary" value="Add Place">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </form>
		
		<hr>

		<h3>Generate QRCode</h3>

        
        <form class="form-horizontal" role="form" action="php/generateqr.php" method="post">

        	

          <div class="form-group">
        
           
          
        
        
								
								
								<div class="col-sm-6">
									<select class="form-control" name="place">
										 <option value="" disabled selected>Select Place</option>
<?php
				$sql = "SELECT * FROM place WHERE id NOT IN (SELECT place_id FROM QRCode) ";
				$result = mysqli_query($con, $sql);
				

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      
      $id = $row["id"];
    
    ?>
										<option value="<?php echo $id; ?>"><?php echo $row["name"]; ?></option>
										
										<?php  }
									}
										?>
									</select>
								</div>
						
       
            <div class="col-md-3">
              <input type="submit" class="btn btn-primary" value="Generate">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </form>


	<hr>

		<h3>Assign Place Neighbors</h3>

        
        <form class="form-horizontal" role="form" action="php/neighbors.php" method="post">

        	

          <div class="form-group">
        
           
          
        
        
								
								
								<div class="col-sm-2">
									<select class="form-control" name="place">
										 <option value="" disabled selected>Select Place</option>
<?php
				$sql = "SELECT * FROM place";
				$result = mysqli_query($con, $sql);
				

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      
      $id = $row["id"];


    
    ?>
										<option value="<?php echo $id; ?>"><?php echo $row["name"]; ?></option>
										
										<?php  }
									}
										?>
									</select>
								</div>


								<div class="col-sm-2">
									<select class="form-control" name="neighbor">
										 <option value="" disabled selected>Select Neighbor </option>
<?php
				$sql1 = "SELECT * FROM place";
				$result1 = mysqli_query($con, $sql1);
				

if (mysqli_num_rows($result1) > 0) {
    // output data of each row
    while($row1 = mysqli_fetch_assoc($result1)) {
      
      $id1 = $row1["id"];


    
    ?>
										<option value="<?php echo $id1; ?>"><?php echo $row1["name"]; ?></option>
										
										<?php  }
									}
										?>
									</select>
								</div>

								 <div class="col-sm-2">
           				   <input class="form-control" type="text" placeholder="distance" name="distance">
           						 </div>
						
       
            <div class="col-md-3">
              <input type="submit" class="btn btn-primary" value="Assign">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </form>

		 <!-- edit form column -->
    
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