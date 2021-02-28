<?php 
    $title = 'Date';
    include 'includes/header.php' ?>
    <h1> DATE AND TIME MANIPULATION </h1>
    <?php
        $getdate = getdate();
        echo $getdate['mday'] . ' - ' . $getdate['mon'] . ' - ' . $getdate['year'] ;
        echo "<h2> Today's date and time is: </h2>";
        echo date("m/d/y <br/> G.i:s") . '<br/>';
    ?>
<?php require 'includes/footer.php'; ?>