<?php
include 'calculate.inc.php';

$fname = $_POST['fnum'];
$lname = $_POST['snum'];
$cal = $_POST['cal'];

?>

<html>
    
    <style>
        
        body {
            background-color: white;
            max-width: 500px;
            max-height: 400px;
            padding: 40px;
            margin: 30px auto;
            box-shadow: 0 0 45px black;
            text-align: center;
        }
        
    </style>
    
    <body>
        
        <?php
            
            $calculator = new Calculate($fname, $lname, $cal);
            
            echo "<h3>";
            
            echo "RTGNetwork | Calculate Response PHP";
            
            echo "</h3>";
            
            echo "<h1>";
            
            echo "Your answer: ";
            
            $calculator->calculate();
            
            echo "<h1>";
        
        ?>
        
    </body>
    
    
</html>