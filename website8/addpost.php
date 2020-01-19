<?php
  require('config/config.php');
  require('config/db.php');

  if(isset($_POST['submit'])){

    $title = mysqli_real_escape_string($conn , $_POST['title']);
    $author = mysqli_real_escape_string($conn , $_POST['author']);
    $body = mysqli_real_escape_string($conn , $_POST['body']);

    $query = "INSERT INTO posts(title, author, body) VALUES('$title' , '$author' , '$body')";
    // die($query);
    if(mysqli_query($conn , $query)){
      header('Location: '.ROOT_URL.'');
    } else {
      echo 'ERROR: '.mysqli_error($conn);
    }
  }
 ?>
<?php include('inc/header.php') ?>
    <div class="container">
      <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
          <label for="">Title</label>
          <input type="text" name="title" value="" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Author</label>
          <input type="text" name="author" value="" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Body</label>
          <br>
          <textarea name="body"></textarea>
        </div>

        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
      </form>
    </div>
<?php include('inc/footer.php') ?>
