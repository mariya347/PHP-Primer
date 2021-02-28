<?php 
    $title = 'String';
    include 'includes/header.php' ?>
    <?php 
        $phrase1 = "my name is maria ";
        $phrase2 = "I am 20 years old";
        //concatination
        echo $phrase1 . " " . $phrase2;
        //concatination with variable
        echo "<H1> Hi $phrase1 </H1>";
        echo 'uppercase first letter: '. ucfirst($phrase1) . '<br/>';
        echo 'uppercase first letter of each word: '. ucwords($phrase1) . '<br/>';
        echo 'uppercase: '. strtoupper($phrase1) . '<br/>';
        echo 'lowercase: '. strtolower($phrase1) . '<br/>';
        echo 'Repeat String: '. strtoupper(str_repeat($phrase1,4)) . '<br/>';
        echo 'Length of string is: ' . strlen($phrase1) . '<br/>';
    ?>
<?php require 'includes/footer.php'; ?>