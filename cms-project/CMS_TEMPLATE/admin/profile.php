<?php
global $connection;
include "db1.php";
session_start();


ob_start();

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $query = "SELECT * FROM users WHERE username = '$username'";
    $select_user_profile = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_array($select_user_profile)) {
        $user_id = $row['user_id'];
        $username = $row['username'];
        $user_password = $row['user_password'];
        $user_firstname = $row['user_firstname'];
        $user_lastname = $row['user_lastname'];
        $user_email = $row['user_email'];
        $user_image = $row['user_image'];
        $user_role = $row['user_role'];
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>SB Admin - Bootstrap Admin Template</title>

	<!-- Bootstrap Core CSS -->
	<link href="../css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="css/sb-admin.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>

<div id="wrapper">

	<!-- Navigation -->
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.html">SB Admin</a>
		</div>
		<!-- Top Menu Items -->
		<ul class="nav navbar-right top-nav">
			<li>
				<a href="http://localhost:63342/untitled/cms-project/CMS_TEMPLATE/index.php?_ijt=1mpl1p5sif9b63606nvovaevvp&_ij_reload=RELOAD_ON_SAVE">
					Go back to user window</a></li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b
							class="caret"></b></a>
				<ul class="dropdown-menu message-dropdown">
					<li class="message-preview">
						<a href="#">
							<div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
								<div class="media-body">
									<h5 class="media-heading">
										<strong>John Smith</strong>
									</h5>
									<p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
									<p>Lorem ipsum dolor sit amet, consectetur...</p>
								</div>
							</div>
						</a>
					</li>
					<li class="message-preview">
						<a href="#">
							<div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
								<div class="media-body">
									<h5 class="media-heading">
										<strong>John Smith</strong>
									</h5>
									<p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
									<p>Lorem ipsum dolor sit amet, consectetur...</p>
								</div>
							</div>
						</a>
					</li>
					<li class="message-preview">
						<a href="#">
							<div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
								<div class="media-body">
									<h5 class="media-heading">
										<strong>John Smith</strong>
									</h5>
									<p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
									<p>Lorem ipsum dolor sit amet, consectetur...</p>
								</div>
							</div>
						</a>
					</li>
					<li class="message-footer">
						<a href="#">Read All New Messages</a>
					</li>
				</ul>
			</li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b
							class="caret"></b></a>
				<ul class="dropdown-menu alert-dropdown">
					<li>
						<a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
					</li>
					<li>
						<a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
					</li>
					<li>
						<a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
					</li>
					<li>
						<a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
					</li>
					<li>
						<a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
					</li>
					<li>
						<a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
					</li>
					<li class="divider"></li>
					<li>
						<a href="#">View All</a>
					</li>
				</ul>
			</li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b
							class="caret"></b></a>
				<ul class="dropdown-menu">
					<li>
						<a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
					</li>
					<li>
						<a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
					</li>
					<li>
						<a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
					</li>
					<li class="divider"></li>
					<li>
						<a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
					</li>
				</ul>
			</li>
		</ul>
		<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav side-nav">
				<li>
					<a href="#"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
				</li>

				<li>
					<a href="javascript:;" data-toggle="collapse" data-target="#posts"><i
								class="fa fa-fw fa-arrows-v"></i> Posts <i class="fa fa-fw fa-caret-down"></i></a>
					<ul id="posts" class="collapse">
						<li>
							<a href="http://localhost:63342/untitled/cms-project/CMS_TEMPLATE/admin/posts.php">View All
								Posts</a>
						</li>
						<li>
							<a href="http://localhost:63342/untitled/cms-project/CMS_TEMPLATE/admin/posts.php?source=add_posts#">Add
								Posts</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="categoryy.php"><i class="fa fa-fw fa-wrench"></i> Categories Page</a>
				</li>

				<li class="active">
					<a href="comments.php"><i class="fa fa-fw fa-file"></i> Comments</a>
				</li>

				<li>
					<a href="javascript:;" data-toggle="collapse" data-target="#demo"><i
								class="fa fa-fw fa-arrows-v"></i> Users <i class="fa fa-fw fa-caret-down"></i></a>
					<ul id="demo" class="collapse">
						<li>
							<a href="users.php">View All Users</a>
						</li>
						<li>
							<a href="users.php?source=add_users">Add Users</a>
						</li>


					</ul>
				</li>
				<li>
					<a href="profile.php"><i class="fa fa-fw fa-dashboard"></i> Profile</a>
				</li>

			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</nav>

	<div id="page-wrapper">

		<div class="container-fluid">

			<!-- Page Heading -->
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">
						Welcome to the Admin
						<small><?php echo $_SESSION['username']; ?></small>
					</h1>


                    <?php
                    include "../constants.php";
                    include "../admin_functions.php";
                    global $connection;
                    if (isset($_GET['update_user'])) {
                        $the_user_id = $_GET['update_user'];

                        $query = "SELECT * FROM users WHERE user_id = '$the_user_id' ";
                        $select_posts_by_id = mysqli_query($connection, $query);

                        while ($row = mysqli_fetch_assoc($select_posts_by_id)) {
                            $user_id = $row['user_id'];
                            $username = $row['username'];
                            $user_password = $row['user_password'];
                            $user_firstname = $row['user_firstname'];
                            $user_lastname = $row['user_lastname'];
                            $user_email = $row['user_email'];
                            $user_image = $row['user_image'];
                            $user_role = $row['user_role'];
                        }
                    }
                    if (isset($_POST['update_user'])) {
                        $user_firstname = $_POST['user_firstname'];
                        $user_lastname = $_POST['user_lastname'];
                        $user_role = $_POST['user_role'];
                        $username = $_POST['username'];
                        $user_email = $_POST['user_email'];
                        $user_password = $_POST['user_password'];


                        $query = "UPDATE users SET  user_password = '$user_password', user_firstname = '$user_firstname' , user_lastname = '$user_lastname' , user_email = '$user_email' , user_image = '$user_image', user_role = '$user_role' 
             WHERE username = '$username'  ";
                        $update_post = mysqli_query($connection, $query);

                        confirmQuery($update_post);


                    }

                    ?>
					<form action="" method="post" enctype="multipart/form-data">

						<div class="form-group">
							<label for="title">Firstname</label>
							<input value="<?php echo $user_firstname; ?>" type="text" class="form-control"
								   name="user_firstname">
						</div>


						<div class="form-group">
							<label for="title">Lastname</label>
							<input value="<?php echo $user_lastname; ?>" type="text" class="form-control"
								   name="user_lastname">
						</div>

						<select name="user_role" id="">
							<option value="subscriber"><?php echo $user_role; ?></option>
                            <?php

                            if ($user_role == 'Admin') {
                                echo "<option value='Subscriber'>Subscriber</option>";

                            } else {

                                echo "<option value='Admin'>Admin</option>";
                            }


                            ?>


						</select>

						<div class="form-group">
							<label for="title">Username</label>
							<input value="<?php echo $username; ?>" type="text" class="form-control" name="username">
						</div>


						<div class="form-group">
							<label for="title">Email</label>
							<input value="<?php echo $user_email; ?>" type="text" class="form-control"
								   name="user_email">
						</div>

						<div class="form-group">
							<label for="title">Password</label>
							<input type="text" class="form-control" name="user_password" id="" cols="30"
								   rows="10"<?php echo $user_password; ?> >


						</div>
						<div class="form-group">
							<input class="btn btn-primary" type="submit" name="update_user" value="Update User Profile">
						</div>
					</form>


				</div>
				<!-- /.row -->

			</div>
			<!-- /.container-fluid -->

		</div>
		<!-- /#page-wrapper -->

	</div>
	<!-- /#wrapper -->

	<!-- jQuery -->
	<script src="../js/jquery.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="../js/bootstrap.min.js"></script>

</body>

</html>



