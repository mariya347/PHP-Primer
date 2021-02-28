<?php 
    $title = 'Array';
    include 'includes/header.php' ?>
    <h1> ARRAY </h1>
    <?php 
        $number = array(1,2,3,4,5,6,7,8,9,10);
        echo "<h2> $number[1] </h2>";

        $size = count($number);
        echo "The size of array is: $size";
        
        for($count = 0; $count<$size; $count++)
        {
            echo "<p> The number is: $number[$count] </p>";
        }
    ?>
<?php require 'includes/footer.php'; ?>