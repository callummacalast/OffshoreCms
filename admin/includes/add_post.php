<?php
//Checking to see wheter there is data being received via the keyword 'create_post'
if(isset($_POST['create_post'])) {

$post_title = $_POST['post_title'];
$post_image = $_FILES['image']['name'];
$post_image_temp = $_FILES['image']['tmp_name'];
$post_content = $_POST['post_content'];

move_uploaded_file($post_image_temp, "../images/$post_image" );

$query = "INSERT INTO posts(post_title, post_image, post_content) ";
$query .= "VALUES('{$post_title}','{$post_image}','{$post_content}' ) ";

$create_post_query = mysqli_query($connection, $query);

confirmQuery($create_post_query);

}

?>

<div> 
  <h2 class="display-4 text-center">Add a new post</h2>

</div>

<form class="col-8 mx-auto my-auto" action="" method="post" enctype="multipart/form-data">

<div class="form-group">
  <label for="title">Post Title</label>
  <input type="text" class="form-control" name="post_title">
</div>
  <?php
  
  ?>


<div class="form-group">
  <label for="post_image">Post Image</label>
  <input type="file" name="image">
</div>


<div class="form-group">
  <label for="post_content">Post Content</label>
  <textarea class="form-control col-12" name="post_content" id="" cols="30" rows="10">
  </textarea>
</div>

<div class="form-group">
  <input type="submit" class="btn btn-primary" type="submit" name="create_post" value="Publish Post">
</div>


</form> 

<?php include "admin_footer.php"; ?>