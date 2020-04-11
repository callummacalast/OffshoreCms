<table class="table col-12 float-right table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Title</th>
                          <th>Image</th>
                          <th>Content</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>

                      <?php
                       $query = "SELECT * FROM posts";
                       $select_posts = mysqli_query($connection, $query);
                     
                        while($row = mysqli_fetch_assoc($select_posts)) {
                          $post_id = $row['post_id'];
                          $post_title = $row['post_title'];
                          $post_image = $row['post_image'];
                          $post_content = $row['post_content'];
                         
                          echo "<tr>";
                          echo "<td>{$post_id}</td>";
                          echo "<td>{$post_title}</td>";
                          echo "<td><img width='100' src='../images/{$post_image}' alt='image'</td>";
                          echo "<td>{$post_content}</td>";
                          echo "<td><a href='posts.php?source=edit_post&p_id={$post_id}'>Edit</a></td>";
                          echo "<td><a href='posts.php?delete={$post_id}'>Delete</a></td>";
                        }

                      ?>
                        
                      </tbody>
                    </table>
                    <?php
                    if(isset($_GET['delete'])) {
                      $the_post_id = $_GET['delete'];

                    $query = "DELETE FROM posts WHERE post_id = {$the_post_id}";

                    $delete_query = mysqli_query($connection, $query);
                    header("Location: posts.php");
                    }




?>