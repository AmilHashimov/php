<?php
include "../constants.php";
include "../admin_functions.php";
global $connection;
if (isset($_GET['p_id'])) {
    $the_post_id = $_GET['p_id'];
}
$query = "SELECT * FROM posts WHERE post_id = '$the_post_id' ";
$select_posts_by_id = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($select_posts_by_id)) {
    $post_id = $row['post_id'];
    $post_author = $row['post_author'];
    $post_title = $row['post_title'];
    $post_category_id = $row['post_category_id'];
    $post_status = $row['post_status'];
    $post_image = $row['post_image'];
    $post_tags = $row['post_tags'];
    $post_comment_count = $row['post_comment_count'];
    $post_date = $row['post_date'];
    $post_content = $row['post_content'];
}
if (isset($_POST['update_post'])) {
    $post_author = $_POST['author'];
    $post_title = $_POST['title'];
    $post_category_id = $_POST['post_category'];
    $post_status = $_POST['post_status'];
    $post_image = $_FILES['image']['name'];
    $post_image_temp = $_FILES['image']['tmp_name'];
    $post_content = $_POST['post_content'];
    $post_tags = $_POST['post_tags'];

    move_uploaded_file($post_image_temp, ASSET . '/' . "$post_image");

    if (empty($post_image)) {
        $query = "SELECT * FROM posts WHERE post_id = '$the_post_id'";
        $select_image = mysqli_query($connection, $query);

        while ($row = mysqli_fetch_array($select_image)) {
            $post_image = $row['post_image'];
        }

    }

    $query = "UPDATE posts SET post_title =  '$post_title' , post_category_id = '$post_category_id' , post_date = now() , post_author = '$post_author' , post_tags = '$post_tags' , post_content = '$post_content' , post_image = '$post_image', post_status = '$post_status' 
     WHERE post_id = '$the_post_id'  ";
    $update_post = mysqli_query($connection, $query);

    confirmQuery($update_post);


}

?>
<form action="" method="post" enctype="multipart/form-data">

	<div class="form-group">
		<label for="title">Post Title</label>
		<input value="<?php echo $post_title; ?>" type="text" class="form-control" name="title">
	</div>

	<div class="form-group">
		<label for="title">Post Category Id</label> <br>
		<select name="user_role" id="">

            <?php
            $query = "SELECT * FROM users";
            $select_users = mysqli_query($connection, $query);
            confirmQuery($select_users);
            while ($row = mysqli_fetch_assoc($select_users)) {
                $user_id = $row['user_id'];
                $user_role = $row['user_role'];

                echo "<option value='$user_id'>{$user_role}</option>";
            }
            ?>


		</select>
	</div>

	<div class="form-group">
		<label for="title">Post Author</label>
		<input value="<?php echo $post_author; ?>" type="text" class="form-control" name="author">
	</div>

	<div class="form-group">
		<label for="title">Post Status</label>
		<input value="<?php echo $post_status; ?>" type="text" class="form-control" name="post_status">
	</div>

<!--	<div class="form-group">-->
<!--		<label for="title">Post Image</label>-->
<!--		<img width="100" src="/cms-project/CMS_TEMPLATE/assets/--><?php //echo $post_image; ?><!--">-->
<!--		<input type="file" class="form-control" name="image">-->
<!--	</div>-->
<!--    --><?php //echo $post_image; ?>


	<div class="form-group">
		<label for="title">Post Tags</label>
		<input value="<?php echo $post_tags; ?>" type="text" class="form-control" name="post_tags">
	</div>

	<div class="form-group">
		<label for="title">Post Content</label>
		<textarea type="text" class="form-control" name="post_content" id="" cols="30"
				  rows="10"><?php echo $post_content; ?>

		</textarea>
	</div>
	<div class="form-group">
		<input class="btn btn-primary" type="submit" name="update_post" value="Update Post">
	</div>
</form>
