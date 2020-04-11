<?php

if(isset($_GET['p_id'])) {

  $the_post_id = $_GET['p_id'];

}

$query = "SELECT * FROM posts WHERE post_id = $the_post_id";
$select_posts_by_id = mysqli_query($connection,$query);
                     
  while($row = mysqli_fetch_assoc($select_posts_by_id)) {
    $post_id = $row['post_id'];
    $post_title = $row['post_title'];
    $post_image = $row['post_image'];
    $post_content = $row['post_content'];
  }

  if(isset($_POST['update_post'])) {
    $post_title = $_POST['post_title'];
    $post_image = $_FILES['image']['name'];
    $post_image_temp = $_FILES['image']['tmp_name'];
    $post_content = $_POST['post_content'];

    move_uploaded_file($post_image_temp, "../images/$post_image");

    if(empty($post_image)) {
      $query = "SELECT * FROM posts WHERE post_id = $the_post_id ";
      $select_image = mysqli_query($connection,$query);

      while($row = mysqli_fetch_array($select_image)) {

        $post_image = $row['post_image'];
      }

    }

    $query = "UPDATE posts SET ";
    $query .= "post_title = '{$post_title}', ";
    $query .= "post_content = '{$post_content}', ";
    $query .= "post_image = '{$post_image}' ";
    $query .= "WHERE post_id = '{$the_post_id}' ";

    $update_post = mysqli_query($connection, $query);

    confirmQuery($update_post);
    
  }
?>

<div>
  <h4 class="display-4 text-center">Update a post</h4>
</div>

<form class="col-6" action="" method="post" enctype="multipart/form-data">

<div class="form-group">
  <label for="title">Post Title</label>
  <input type="text" value="<?php echo $post_title; ?>" class="form-control" name="post_title">
</div>

<div class="form-group">
  <img width="100" src="../images/<?php echo $post_image; ?>" alt="">
  <!-- <label for="post_image">Post Image</label> -->
  <input type="file" name="image">
</div>

<div class="form-group">
  <label for="post_content">Post Content</label>
  <textarea class="form-control" name="post_content" id="" cols="30" rows="10">
  <?php echo $post_content; ?>
  </textarea>
</div>

<div class="form-group">
  <input type="submit" class="btn btn-primary" name="update_post" value="Update Post">
</div>


</form>