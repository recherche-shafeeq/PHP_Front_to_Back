<?php
  require('config/config.php');
  require('config/db.php');

  if(isset($_POST['submit'])){
    $update_id = mysqli_real_escape_string($conn , $_POST['update_id']);
    $title = mysqli_real_escape_string($conn , $_POST['title']);
    $author = mysqli_real_escape_string($conn , $_POST['author']);
    $body = mysqli_real_escape_string($conn , $_POST['body']);

    $query = "UPDATE posts SET
              title = '$title',
              author = '$author',
              body = '$body' WHERE id = {$update_id}";
    // die($query);
    if(mysqli_query($conn , $query)){
      header('Location: '.ROOT_URL.'');
    } else {
      echo 'ERROR: '.mysqli_error($conn);
    }
  }
  $id = mysqli_real_escape_string($conn , $_GET['id']);
  $query = 'SELECT * FROM posts WHERE id = '.$id;

  $result = mysqli_query($conn , $query);

  $post = mysqli_fetch_assoc($result);

  // var_dump($posts);

  mysqli_free_result($result);

  mysqli_close($conn);
 ?>
<?php include('inc/header.php') ?>
    <div class="container">
      <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
          <label for="">Title</label>
          <input type="text" name="title" value="<?php echo $post['title'] ?>" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Author</label>
          <input type="text" name="author" value="<?php echo $post['author'] ?>" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Body</label>
          <br>
          <textarea name="body" ><?php echo $post['body']; ?></textarea>
        </div>
        <input type="hidden" name="update_id" value="<?php echo $post['id']; ?>">
        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
      </form>
    </div>
<?php include('inc/footer.php') ?>
