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


//    move_uploaded_file($post_image_temp, ASSET . '/' . "$post_image");
//
//    if (empty($post_image)) {
//        $query = "SELECT * FROM posts WHERE post_id = '$the_post_id'";
//        $select_image = mysqli_query($connection, $query);
//
//        while ($row = mysqli_fetch_array($select_image)) {
//            $post_image = $row['post_image'];
//        }
//
//    }

    $query = "UPDATE users SET username =  '$username' , user_password = '$user_password', user_firstname = '$user_firstname' , user_lastname = '$user_lastname' , user_email = '$user_email' , user_image = '$user_image', user_role = '$user_role' 
     WHERE user_id = '$the_user_id'  ";
    $update_post = mysqli_query($connection, $query);

    confirmQuery($update_post);


}

?>
<form action="" method="post" enctype="multipart/form-data">

	<div class="form-group">
		<label for="title">Firstname</label>
		<input value="<?php echo $user_firstname; ?>" type="text" class="form-control" name="user_firstname">
	</div>


	<div class="form-group">
		<label for="title">Lastname</label>
		<input value="<?php echo $user_lastname; ?>" type="text" class="form-control" name="user_lastname">
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
		<input value="<?php echo $user_email; ?>" type="text" class="form-control" name="user_email">
	</div>

	<div class="form-group">
		<label for="title">Password</label>
		<input type="password" class="form-control" name="user_password"
			  <?php echo $user_password; ?> >


	</div>
	<div class="form-group">
		<input class="btn btn-primary" type="submit" name="update_user" value="Update User Info">
	</div>
</form>
