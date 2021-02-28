<?php
        $title = 'Index';
        include 'includes/header.php' ?>
    <?php
        echo 'Hello PHP';
        echo '<br/>';
        echo 'Second Line';
        echo '<br/>';
        $name = 'Maria Nasir';
        $age = '20';
        echo "<H1> Hi My name is: $name </H1>";
        echo "<h1> My age is: $age </h1>";
        echo '<br/>';
    ?>
    <button type="button" class="btn btn-danger">Click me!</button>
    <?php require 'includes/footer.php'; ?>