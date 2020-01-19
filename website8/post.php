<?php
  require('config/config.php');
  require('config/db.php');
  if(isset($_POST['delete'])){
    $delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);

    $query = "DELETE FROM posts WHERE id = ".$delete_id;
    // die($query);
    if(mysqli_query($conn , $query)){
      header('Location:'.ROOT_URL.'');
    } else {

      echo "<br>"."Error: ".mysqli_error($conn);
    }
  }
  $id = mysqli_real_escape_string($conn , $_GET['id']);
  $query = "SELECT * FROM posts Where id =".$id;

  $result = mysqli_query($conn , $query);

  $post  = mysqli_fetch_assoc($result);

  // var_dump($posts);

  mysqli_free_result($result);
  mysqli_close($conn);
 ?>
<?php include('inc/header.php') ?>
    <div class="container">
      <a href="<?php echo ROOT_URL ?>" class="btn btn-default">Back</a>
        <h1><?php echo $post['title'] ?></h3>
          <small>Created On <?php echo $post['created_at'] ?> by <?php echo $post['author'] ?></small>
          <p><?php echo $post['body'] ?></p>
      <form class="pull-right" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>?id=<?php echo $post['id']; ?>">
        <input type="hidden" name="delete_id" value="<?php echo $post['id']; ?>">
        <input type="submit" name="delete" value="DELETE" class="btn btn-danger">
      </form>
      <a href="<?php echo ROOT_URL ?>editpost.php?id=<?php echo $post['id'] ?>" class="btn btn-default">Edit</a>

    </div>
<?php include('inc/footer.php') ?>
