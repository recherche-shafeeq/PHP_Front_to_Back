<!-- <?php
  include('http://localhost/phpSandbox/website8/config/config.php');
 ?> -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href=<?php echo ROOT_URL ?>>Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo ''.ROOT_URL."addpost.php" ?>">Add Post<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
<br>
