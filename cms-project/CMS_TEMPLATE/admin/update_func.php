<?php


global $connection;
if (isset($_GET['edit'])) {
    $cat_id = $_GET['edit'];
    $query = "SELECT * FROM category WHERE cat_id = '$cat_id'";
    $select_category = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_category)) {
        $cat_id = $row['cat_id'];
        $cat_title = $row['cat_title'];
    }
}

if (isset($_POST['update_cat'])) {
    $cat_id = $_POST['cat_id'];
    $the_cat_title = $_POST['cat_title'];
    $query = "UPDATE category SET cat_title = '$the_cat_title' WHERE cat_id = '$cat_id'";
    $update_query = mysqli_query($connection, $query);
    if (!$update_query) {
        die("QUERY FAILED" . mysqli_error($connection));
    }
}
?>

<form action="" method="post">
	<div class="form-group">
		<label for="cat_title">Update Category</label>
		<input value="<?php if (isset($cat_title)) {
            echo $cat_title;
        } ?>" class="form-control" type="text" name="cat_title">
		<input type="hidden" name="cat_id" value="<?php if (isset($cat_id)) {
            echo $cat_id;
        } ?>">
	</div>
	<div class="form-group">
		<input class="btn btn-primary" type="submit" name="update_cat" value="Edit">
	</div>
</form>







