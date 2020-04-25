<?php include "../includes/db.php"; ?>
<h1 class="display-4 text-center">Feedback</h1>
<table class="table col-8 mx-auto my-auto table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Email</th>
                          <th>Message</th>
                          <th>Reply</th>
                          <th>Done</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>

                      <?php
                       $query = "SELECT * FROM feedback";
                       $select_feedback = mysqli_query($connection, $query);
                     
                        while($row = mysqli_fetch_assoc($select_feedback)) {
                          $feedback_id = $row['feedback_id'];
                          $user_firstname = $row['user_firstname'];
                          $user_lastname = $row['user_lastname'];
                          $user_email = $row['user_email'];
                          $user_message = $row['user_message'];
                         
                          echo "<tr>";
                          echo "<td>{$feedback_id}</td>";
                          echo "<td>{$user_firstname}</td>";
                          echo "<td>{$user_lastname}</td>";
                          echo "<td>{$user_email}</td>";
                          echo "<td>{$user_message}</td>";
                          echo "<td><a href='www.google.com' target='_blank'>Reply</a></td>";
                          echo "<td><a href='' target='_blank'>Done</a></td>";
                          echo "<td><a href='admin?delete={$feedback_id}'>Delete</a></td>";
                        }

                      ?>
                        
                      </tbody>
                    </table>
                    <?php
                    if(isset($_GET['delete'])) {
                      $the_feedback_id = $_GET['delete'];

                    $query = "DELETE FROM feedback WHERE feedback_id = {$the_feedback_id}";

                    $delete_query = mysqli_query($connection, $query);
                    header("Location: admin");
                    }




?>