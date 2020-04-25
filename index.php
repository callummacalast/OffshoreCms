
<?php include "includes/header.php"; ?>

<!DOCTYPE html>
<html lang="en">

<body>
<?php include "includes/navigation.php"; ?>

<header>
<h1 class="display-4 text-center" id="offshore_title">Offshore Surfwear</h1>
</header>
<br>
<main class="d-flex flex-wrap">
<?php
            $query = "SELECT * FROM posts";
            $select_all_posts_query = mysqli_query($connection,$query);

                 while($row = mysqli_fetch_assoc($select_all_posts_query)) {
                    $post_id = $row['post_id'];
                    $post_title = $row['post_title'];
                    $post_image = $row['post_image'];
                    $post_content = substr($row['post_content'],0,100);
            ?>
                <!-- First Blog Post -->
                <div class="card" id="post_card">
                  <img src="images/<?php echo $post_image; ?>" class="card-img-top" alt="Post Image">
                  <h5 class="card-title"><?php echo $post_title; ?></h5>
                  <div class="card-body">
                    <p class="card-text"><?php echo $post_content; ?></p>
                    <!-- <a href="#" class="btn btn-primary">Read More</a> -->
                  </div>
                
                  
              </div>
            
              
              <!-- <div class="container m-4">Spacing</div> -->



            <?php }  ?>
              
</main>

 <?php include "includes/footer.php"; ?>