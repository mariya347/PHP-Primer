<?php 
    $title = 'For Loop';
    include 'includes/header.php' ?>
   <?php
        for($count = 0; $count<10; $count++)
        {
            echo "<p> The count is: $count </p>";
        }
  ?> 
<?php require 'includes/footer.php'; ?>