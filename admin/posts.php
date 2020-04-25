<?php include "includes/admin_header.php"; ?>
<?php include "includes/admin_navigation.php"; ?>


<?php

if(isset($_GET['source'])) {

  $source = $_GET['source'];
} else {
  $source = '';
}

switch($source) {

  case 'add_post';
    include "includes/add_post.php";
  break;

  case 'edit_post';
    include "includes/edit_post.php";
  break;

  case 'view_all_messages';
    include "includes/view_all_messages.php";
  break;

  case 'login ';
    include "../admin/login.php";
  break;

  default:
  include "includes/view_all_posts.php";
  break;
}



?>


 
<?php include "includes/admin_footer.php"; ?>