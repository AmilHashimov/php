<?php
global $connection;


?>
<table class="table table-bordered table-hover">
    <thead>
    <tr>
        <th>Id</th>
        <th>Author</th>
        <th>Comment</th>
        <th>Email</th>
        <th>Status</th>
        <th>In response</th>
		<th>Date</th>
		<th>Approve</th>
        <th>Un Approve</th>
        <th>Delete</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <?php
        $query = "SELECT * FROM comments";
        $select_posts = mysqli_query($connection, $query);

        while ($row = mysqli_fetch_assoc($select_posts)) {
            $comment_id = $row['comment_id'];
			$comment_email = $row['comment_email'];
            $comment_author = $row['comment_author'];
			$comment_content = $row['comment_content'];
            $comment_category_id = $row['comment_post_id'];
            $comment_status = $row['comment_status'];
            $comment_date = $row['comment_date'];
            echo "<tr>";
            echo "<td>$comment_id</td>";
            echo "<td>$comment_author</td>";



            $query = "SELECT * FROM category WHERE cat_id = '$comment_category_id'";
            $select_categories_id = mysqli_query($connection, $query);

            while ($row = mysqli_fetch_assoc($select_categories_id)) {
                $cat_id = $row['cat_id'];
                $cat_title = $row['cat_title'];


                echo "<td>$cat_title</td>";
            }



            echo "<td>$comment_content</td>";
            echo "<td>$comment_email</td>";
			echo "<td>$comment_status</td>";

			echo "<td>$comment_date</td>";


            echo "<td><a href='posts.php?source=edit_posts&p_id={$comment_id}'>Edit</a> </td>";
            echo "<td><a href='posts.php?delete={$comment_id}'>Delete</a> </td>";
            echo "</tr>";


        }


        ?>
    </tr>
    </tbody>
</table>

<?php
if (isset($_GET['delete'])) {
    $the_comment_id = $_GET['delete'];
    $query = "DELETE FROM comments WHERE comment_id = '$the_comment_id '";
    $result = mysqli_query($connection, $query);


}


?>

