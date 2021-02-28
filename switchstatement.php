<?php 
    $title = 'Switch statement';
    include 'includes/header.php' ?>
   <?php
        echo '<h2 style = "font-weight: bold"> IF STATEMENT </h2>';
        $grade = 'd';
        switch($grade){
            case 'A':
                echo '<h3 style = "color : blue" > You are superstar </h3>';
                break;
            case 'B':
                echo '<h3 style = "color : green" > You did welldone </h3>';
                break;
            default:
                echo '<h3 style = "color : red" > You are failed </h3>';
                
        }

    ?> 
<?php require 'includes/footer.php'; ?>