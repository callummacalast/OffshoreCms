<?php include "includes/admin_header.php"; ?>



<?php 

if(isset($_POST['login'])) {

  $username = $_GET['login_username'];
  $password = $_GET['login_password'];

  $username = mysqli_real_escape_string($connection, $username);
  $password = mysqli_real_escape_string($connection, $password);

$query = "SELECT * FROM admin_login WHERE admin_username = '{$username}' ";
$select_admin_query = mysqli_query($connection, $query);


if(!$select_admin_query) {
  die("Query Failed". mysqli_error($connection));
}

while($row = mysqli_fetch_array($select_admin_query )) {

  $db_admin_id = $row['admin_id'];
  $db_admin_username = $row['admin_username'];
  $db_admin_password = $row['admin_password'];
}


if($username === $db_admin_username && $password === $db_admin_password) {

  header("Location: admin/index.php");

} else {
  header("Location: ../index.php");
}


}

?>




<h1 class="text-center display-4 border-bottom w-50 mx-auto my-auto">OFFSHORE</h1>
<header class="text-center clearfix">
 
  <h2 class="display-4">Log in</h2>
</header>

<form class="col-6 mx-auto my-auto pt-5" method="post">
  <div class="form-group">
    <label for="login_username">Username</label>
    <input type="text" class="form-control" name="login_username" aria-describedby="emailHelp">

  </div>
  <div class="form-group">
    <label for="login_password">Password</label>
    <input type="password" class="form-control" name="login_password">
  </div>

  <button type="submit" class="btn btn-outline-primary" name="login">Submit</button>
</form>