<?php
include "../admin_functions.php";
global $connection;
include "../constants.php";
if (isset($_POST['create_post'])) {
    $post_title = $_POST['title'];
    $post_author = $_POST['author'];
    $post_category_id = $_POST['post_category'];
    $post_status = $_POST['post_status'];

    $post_image = $_FILES['image']['name'];
    $post_image_temp = $_FILES['image']['tmp_name'];

    $post_tags = $_POST['post_tags'];
    $post_content = $_POST['post_content'];
    $post_date = date('d-m-y');


    move_uploaded_file($post_image_temp, ASSET . '/' . "$post_image");

    $query = "INSERT INTO posts(post_category_id, post_title, post_author, post_date, post_image, post_content, post_tags,post_status)
	VALUES ('$post_category_id', '$post_title', '$post_author', '$post_date', '$post_image', 
	'$post_content', '$post_tags', '$post_status')";
    $create_post_query = mysqli_query($connection, $query);
    confirmQuery($create_post_query);
}

?>


<form action="" method="post" enctype="multipart/form-data">


	<div class="form-group">
		<label for="title">Firstname</label>
		<input type="text" class="form-control" name="user_firstname">
	</div>

	<div class="form-group">
		<label for="title">Lastname</label>
		<input type="text" class="form-control" name="user_lastname">
	</div>


	<select name="user_role" id="">
		<option value="admin">Admin</option>
		<option value="subscriber">Subscriber</option>


	</select>
	<!---->
	<!--	<div class="form-group">-->
	<!--		<label for="title">Post Title</label>-->
	<!--		<input type="text" class="form-control" name="title">-->
	<!--	</div>-->
	<!---->
	<!--	<div class="form-group">-->
	<!--		<label for="title">Post Category Id</label> <br>-->
	<!--		<div class="form-group">-->
	<!--			<label for="title"></label>-->
	<!--			<input type="file" class="form-control" name="image">-->
	<!--		</div>-->

	<div class="form-group">
		<label for="title">Username</label>
		<input type="text" class="form-control" name="username">
	</div>

	<div class="form-group">
		<label for="title">Email</label>
		<input type="email" class="form-control" name="user_email">
	</div>


	<div class="form-group">
		<label for="title">Password</label>
		<input type="password" class="form-control" name="user_password">
	</div>

	<div class="form-group">
		<input class="btn btn-primary" type="submit" name="create_user" value="Add User">
	</div>
</form>
