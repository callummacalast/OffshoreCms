
<?php include "includes/header.php"; ?>

<!DOCTYPE html>
<html lang="en">

<body>
<?php include "includes/navigation.php"; ?>

<header>
<h1 class="w-50 display-3 text-center border-bottom my-auto mx-auto">Offshore Surfwear</h1>
</header>

<main class="mx-auto my-auto">
<!-- <div class="gallery-title">
  <h2 class="display-4 text-center">Welcome to our gallery</h2>

</div> -->

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
                <div class="card mx-auto my-auto col-6">
                  <img src="images/<?php echo $post_image; ?>" class="card-img-top img-responsive" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $post_title; ?></h5>
                    <p class="card-text"><?php echo $post_content; ?></p>
                    <a href="#" class="btn">Read More</a>
                  </div>
              </div>
              <div class="container m-4">Spacing</div>



            <?php }  ?>
              
</main>

 <?php include "includes/footer.php"; ?>