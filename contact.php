<?php include "includes/header.php"; ?>
<?php include "includes/navigation.php"; ?>


<h3 class="text-center display-4">Contact us</h3>
<div class="contact_container col-12 mx-auto my-auto">
<p class="text-center">Leave us a comment with your email address and we can get back to you shortly!! <br> Thanks for your support - Keep shredding - Offshore</p>
<form class="form-group mb-5" method="post" action="">

    <div class=" first-name col-9 mx-auto my-auto">
    <label for="firstname">First Name</label>
      <input type="text" class="form-control" placeholder="First name" name="user_firstname">
      <br>
    </div>
    <div class="last-name col-9 mx-auto my-auto">
    <label for="lastname">Last Name</label>
      <input type="text" class="form-control" placeholder="Last name" name="user_lastname">
    </div>
<br>
  <div class="email col-9 mx-auto my-auto">
    <label for="email_adress">Email address</label>
    <input type="email" class="form-control" name="user_email" placeholder="name@example.com">
  </div>
  <br>
  <div class="form-group col-9 mx-auto my-auto">
    <label for="user_message">Leave us a message</label>
    <textarea class="form-control" name="user_message" rows="3"></textarea>
    <input class="btn btn-outline-primary mt-2 w-100" type="submit" name="feedback" id="feedback_message">

  </div>
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
</div>



<?php include "includes/footer.php"; ?>
