<?php
  $logged = true;
  echo $logged ? "You are logged in " : "You are not logged in";

  $score = 11;
  $age = 11;

  echo "Your score is ".$score > 10 ? ($age < 10 ?"Exceptional ": "Average" ):($age < 10 ? "Average": "Horrible") ;

   ?>
<div class="">
  <?php if($logged): ?>
    <?php echo "logged in"; ?>
  <?php endif; ?>
</div>
<ul>
  <?php for($i = 0; $i < 10; $i++): ?>
    <li><?php echo $i ?></li>
  <?php endfor; ?>
</ul>
