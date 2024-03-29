<?php
global $connection;
include "db1.php";


?>


<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Blog Home - Start Bootstrap Template</title>

	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="css/blog-home.css" rel="stylesheet">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">CMS</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
                <?php
                $query = "SELECT * FROM category";
                $select_all_category_query = mysqli_query($connection, $query);
                while ($row = mysqli_fetch_assoc($select_all_category_query)) {
                    $cat_title = $row['cat_title'];
                    echo "<li><a href=''>{$cat_title}</a></li>";
                }


                ?>
				<li>
					<a href="http://localhost:63342/untitled/cms-project/CMS_TEMPLATE/admin/admin.php?_ijt=f9i11ihlnlk744k2bufe8qbf1v&_ij_reload=RELOAD_ON_SAVE">Admin</a>
				</li>
				<!--                    <li>-->
				<!--                        <a href="#">Services</a>-->
				<!--                    </li>-->
				<!--                    <li>-->
				<!--                        <a href="#">Contact</a>-->
				<!--                    </li>-->


			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container -->
</nav>

<!-- Page Content -->
<div class="container">

	<div class="row">

		<!-- Blog Entries Column -->
		<div class="col-md-8">

            <?php
            if (isset($_GET['p_id'])) {

                $the_post_id = $_GET['p_id'];

            }
            $query = "SELECT * FROM posts WHERE  post_id = '$the_post_id'";
            $select_all_posts_query = mysqli_query($connection, $query);

            while ($row = mysqli_fetch_assoc($select_all_posts_query)) {

                $post_title = $row['post_title'];
                $post_author = $row['post_author'];
                $post_date = $row['post_date'];
                $post_image = $row['post_image'];
                $post_content = $row['post_content'];


                ?>
				<h1 class="page-header">
					Page Heading
					<small>Secondary Text</small>
				</h1>
				<h2>
					<a href="#"><?php echo $post_title; ?></a>
				</h2>
				<p class="lead">
					by <a href="index.php"><?php echo $post_author; ?></a>
				</p>
				<p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date; ?></p>
				<hr>
				<img class="img-responsive" src="/cms-project/CMS_TEMPLATE/assets/<?php echo $post_image; ?>" alt="">
				<hr>
				<p><?php echo $post_content; ?></p>
				<a class="btn btn-primary" href="#">Read More <span
							class="glyphicon glyphicon-chevron-right"></span></a>

				<hr>


            <?php } ?>


            <?php

            if (isset($_POST['create_comment'])) {
                $the_post_id = $_GET['p_id'];

                $comment_author = $_POST['comment_author'];
                $comment_email = $_POST['comment_email'];
                $comment_content = $_POST['comment_content'];
                $query = "INSERT INTO comments ( comment_post_id, comment_author, comment_email, comment_content, comment_status, comment_date) VALUES ($the_post_id , '$comment_author', '$comment_email' , '$comment_content', 'unapproved', now())";


                $create_comment_query = mysqli_query($connection, $query);
                if (!$create_comment_query) {
                    die('QUERY FAILED' . mysqli_error($connection));
                }


				$query = "UPDATE posts SET post_comment_count = post_comment_count + 1 WHERE post_id = '$the_post_id'";
				$update_comment_count = mysqli_query($connection, $query);


            }

            ?>


			<div class="well">
				<h4>Leave a Comment:</h4>
				<form action="" method="post" role="form">
					<div class="form-group">
						<label for="Author">Author</label>
						<input type="text" class="form-control" name="comment_author">
					</div>
					<div class="form-group">
						<label for="Email">Email</label>
						<input type="email" class="form-control" name="comment_email">
					</div>
					<div class="form-group">
						<label for="Comment">Your Comment</label>
						<textarea name="comment_content" class="form-control" rows="3"></textarea>
					</div>
					<button type="submit" name="create_comment" class="btn btn-primary">Upload Comment</button>
				</form>
			</div>

			<hr>

			<!-- Posted Comments -->

			<!-- Comment -->


			<!-- Comment -->
            <?php
            $query = "SELECT * FROM comments WHERE comment_post_id = '$the_post_id' AND comment_status = 'approved' ORDER BY  comment_id DESC ";
            $select_comment_query = mysqli_query($connection, $query);
            if (!$select_comment_query) {
                die('QUERY FAILED' . mysqli_error($connection));
            }
            while ($row = mysqli_fetch_array($select_comment_query)) {

                $comment_date = $row['comment_date'];
                $comment_content = $row['comment_content'];
                $comment_author = $row['comment_author'];

                ?>


				<div class="media">
					<a class="pull-left" href="#">
						<img class="media-object" src="http://placehold.it/64x64" alt="">
					</a>
					<div class="media-body">
						<h4 class="media-heading"><?php echo $comment_author; ?>
							<small><?php echo $comment_date; ?></small>
						</h4>
                        <?php echo $comment_content; ?>
					</div>
				</div>


            <?php } ?>


			<!-- First Blog Post -->


			<!-- Pager -->
			<ul class="pager">
				<li class="previous">
					<a href="#">&larr; Older</a>
				</li>
				<li class="next">
					<a href="#">Newer &rarr;</a>
				</li>
			</ul>

		</div>


		<!-- Blog Sidebar Widgets Column -->
		<div class="col-md-4">
            <?php

            if (isset($_POST['submit'])) {
                $catch = $_POST['search'];
                $query = "SELECT * FROM posts WHERE post_tags LIKE '%$catch%'";
                $search_query = mysqli_query($connection, $query);
                if (!$search_query) {
                    die("QUERY FAILED" . mysqli_error($connection));
                }
                $count = mysqli_num_rows($search_query);
                if ($count == 0) {
                    echo "<h1>No result</h1>";
                } else {
                    echo "Display some result";
                }
            }


            ?>


			<!-- Blog Search Well -->
			<div class="well">
				<h4>Blog Search</h4>
				<form action="search.php" method="post">
					<div class="input-group">
						<input type="text" name="search" class="form-control">
						<span class="input-group-btn">
                            <button name="submit" class="btn btn-default" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
					</div>
				</form><!--search form->
                    <!- /.input-group -->
			</div>


			<!-- Blog Categories Well -->
			<div class="well">

                <?php
                $query = "SELECT * FROM category";
                $select_category_sidebar = mysqli_query($connection, $query);

                ?>
				<h4>Blog Categories</h4>
				<div class="row">
					<div class="col-lg-6">
						<ul class="list-unstyled">

                            <?php
                            while ($row = mysqli_fetch_assoc($select_category_sidebar)) {
                                $cat_title = $row['cat_title'];
                                echo "<li><a href='#'>{$cat_title}</a></li>";
                            }
                            ?>
						</ul>
					</div>
					<!-- /.col-lg-6 -->
					<div class="col-lg-6">
						<ul class="list-unstyled">
							<li><a href="#">Category Name</a>
							</li>
							<li><a href="#">Category Name</a>
							</li>
							<li><a href="#">Category Name</a>
							</li>
							<li><a href="#">Category Name</a>
							</li>
						</ul>
					</div>
					<!-- /.col-lg-6 -->
				</div>
				<!-- /.row -->
			</div>


			<!-- Side Widget Well -->
			<div class="well">
				<h4>Side Widget Well</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus
					laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
			</div>

		</div>

	</div>
	<!-- /.row -->

	<hr>

	<!-- Footer -->
	<footer>
		<div class="row">
			<div class="col-lg-12">
				<p>Copyright &copy; Your Website 2014</p>
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<!-- /.row -->
	</footer>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>