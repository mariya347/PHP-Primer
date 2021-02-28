<?php 
    $title = 'If Statement';
    include 'includes/header.php' ?>
   <?php
        echo '<h2 style = "font-weight: bold"> IF STATEMENT </h2>';
        $grade = 'B';
        if($grade == 'A'){
            echo '<h3 style = "color : blue" > You are superstar </h3>';
        }
        elseif($grade == 'B'){
            echo '<h3 style = "color : green" > You did welldone </h3>';
        }
        else{
            echo '<h3 style = "color : red" > You are failed </h3>';
        }
  ?> 
<?php require 'includes/footer.php'; ?>