<?php include "includes/header.php"; ?>
<?php include "includes/navigation.php"; ?>


<h3 class="text-center display-4">Contact us</h3>
<p>Leave us a comment with your email address and we can get back to you shortly!! <br> Thanks for your support - Keep shredding - Offshore</p>
<form class="mx-auto my-auto" method="post" action="">

    <div class="col-8">
    <label for="firstname">First Name</label>
      <input type="text" class="form-control" placeholder="First name" name="user_firstname">
      <br>
    </div>
    <div class="col-8">
    <label for="lastname">Last Name</label>
      <input type="text" class="form-control" placeholder="Last name" name="user_lastname">
    </div>
<br>
  <div class="form-group col-8">
    <label for="email_adress">Email address</label>
    <input type="email" class="form-control" name="user_email" placeholder="name@example.com">
  </div>
  <div class="form-group col-8">
    <label for="user_message">Leave us a message</label>
    <textarea class="form-control" name="user_message" rows="3"></textarea>
  </div>
  <input class="btn btn-primary" type="submit" name="feedback">
</form>
<?php
if(isset($_POST['feedback'])) {

    // $_POST['feedback'];
    $user_firstname = $_POST['user_firstname']; 
    $user_lastname = $_POST['user_lastname']; 
    $user_email = $_POST['user_email']; 
    $user_message = $_POST['user_message']; 


$query = "INSERT INTO feedback (user_firstname, user_lastname, user_email, user_message) ";
$query .= "VALUES('{$user_firstname}','{$user_lastname}','{$user_email}','{$user_message}' )";

$user_message_query = mysqli_query($connection, $query);

confirmQuery($user_message_query);
}

?>

<div class="m-2 card h-25 col-6 border-dark">
  <div class="card-body">
    <h5 class="card-title border-bottom ">View our social platforms<i class="pl-3 fas fa-share-alt-square"></i></h5>
    <p class="card-text"><i class=" display-4 fab fa-facebook-square"></i>
    <i class="pl-3 display-4 fab fa-instagram-square" id="instagram"></i>
    </p>
  </div>
</div >
<?php include "includes/footer.php"; ?>
