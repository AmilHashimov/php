<?php
global $connection;
include "db1.php";
ob_start();
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
	<link href="css/bootstrap.min.css" rel="stylesheet">

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
						<a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
					</li>
				</ul>
			</li>
		</ul>
		<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav side-nav">
				<li>
					<a href="admin.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
				</li>

				<li>
					<a href="javascript:;" data-toggle="collapse" data-target="#posts"><i
								class="fa fa-fw fa-arrows-v"></i> Posts <i class="fa fa-fw fa-caret-down"></i></a>
					<ul id="posts" class="collapse">
						<li>
							<a href="view_all_posts.php">View All Posts</a>
						</li>
						<li>
							<a href="add_posts.php">Add Posts</a>
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
							<a href="#">Dropdown Item</a>
						</li>
						<li>
							<a href="#">Dropdown Item</a>
						</li>


					</ul>
				</li>
				<li>
					<a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> Profile</a>
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
						<small>Mark Rikztski</small>
					</h1>
					<div class="col-xs-6">

                        <?php
                        if (isset($_POST['submit'])) {
                            $cat_title = $_POST['cat_title'];
                            if ($cat_title == "" || empty($cat_title)) {
                                echo "This field shouldn't be empty";
                            } else {
                                $query = "INSERT INTO category(cat_title) VALUE ('{$cat_title}')";
                                $create_cat = mysqli_query($connection, $query);

                                if (!$create_cat) {
                                    die('QUERY FAILED' . mysqli_error($connection));
                                }

                            }

                        }


                        ?>


						<form action="" method="post">
							<div class="form-group">
								<label for="cat_title">Add Category</label>
								<input class="form-control" type="text" name="cat_title">
							</div>
							<div class="form-group">
								<input class="btn btn-primary" type="submit" name="submit" value="Add Category">
							</div>


						</form>
						<?php
						if (isset($_GET['edit'])){
							$cat_id = $_GET['edit'];
                            include "update_func.php";

						}

						?>



					</div>

					<div class="col-xs-6">
						<!--						FIND ALL QUERY-->
                        <?php

                        ?>
						<table class="table table-bordered table-hover">
							<thead>
							<tr>
								<th>Id</th>
								<th>Category Title</th>
							</tr>
							</thead>
							<tbody>
                            <?php
                            $query = "SELECT * FROM category";
                            $select_category = mysqli_query($connection, $query);

                            while ($row = mysqli_fetch_assoc($select_category)) {
                                $cat_id = $row['cat_id'];
                                $cat_title = $row['cat_title'];
                                echo "<tr>";
                                echo "<td>{$cat_id}</td>";
                                echo "<td>{$cat_title}</td>";
                                echo "<td> <a href='categoryy.php?delete={$cat_id}'</a>Delete</td>";
                                echo "<td> <a href='categoryy.php?edit={$cat_id}'</a>Edit</td>";
                                echo "</tr>";
                            }
                            ?>
							<!--							DELETE QUERY-->
                            <?php

                            if (isset($_GET['delete'])) {
                                $the_cat_id = $_GET['delete'];
                                $query = "DELETE FROM category WHERE cat_id = {$the_cat_id}";
                                $delete_query = mysqli_query($connection, $query);
                                header("Location: categoryy.php");
                            }

                            ?>


							</tbody>
						</table>
					</div>


					<!--                        <ol class="breadcrumb">-->
					<!--                            <li>-->
					<!--                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>-->
					<!--                            </li>-->
					<!--                            <li class="active">-->
					<!--                                <i class="fa fa-file"></i> Blank Page-->
					<!--                            </li>-->
					<!--                        </ol>-->
				</div>
			</div>
			<!-- /.row -->

		</div>
		<!-- /.container-fluid -->

	</div>
	<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>
