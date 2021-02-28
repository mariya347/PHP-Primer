<?php
    $title = 'Functions';
    include 'includes/header.php' ?>
<h1> FUNCTIONS </h1>
    <?php
        function writeMessage(){
            echo "You are awesome";
        }

        writeMessage();
        echo '<hr/>';
        writeMessage();
        echo '<br/>';

        function sum($sum1, $sum2){
            $sum = $sum1 + $sum2;
            echo "the sum of $sum1 and $sum2 is: $sum";
        }

        sum(5,7);
    ?>
<?php require 'includes/footer.php'; ?>