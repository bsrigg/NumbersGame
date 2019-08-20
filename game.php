<?php 
session_start();
if(!isset($_SESSION['number'])){
    $_SESSION['number'] = rand(1,100);
    $_SESSION['tries'] = 0;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Great Number Game</title>
</head>
<body>
    <br/>
    <br/>
    <br/>
    <h1 style="text-align: center">Welcome to the Great Number Game!</h1>
    <h3 style="text-align: center">I am thinking of a number between 1 and 100</h3>
    <h3 style="text-align: center">Please take a guess!</h3>
    <form style="text-align: center" action="process.php" method="post">
        <input type="number" name="guess" />
        <input type="submit" value="Submit Number" />
    </form><br/>
    <?php
        if(isset($_SESSION['result']) && $_SESSION['result'] == 'Equals'){
            echo "<div style='margin: auto; border: 2px solid black; width: 100px; height: 100px; text-align: center; background-color: green'><h4>{$_SESSION['number']}</h4><p>was the number</p></div><br/>";
            echo "<h5 style='text-align: center'>You did it in {$_SESSION['tries']} guesses!</h5>";
            $_SESSION['number'] = rand(1,100);
            $_SESSION['tries'] = 0;
        }
        else if(isset($_SESSION['result']) && $_SESSION['result'] == 'Low'){
            echo '<div style="margin: auto; border: 2px solid black; width: 100px; height: 100px; text-align: center; background-color: red"><p>Too Low!</p></div><br/>';
            echo "<h5 style='text-align: center'>{$_SESSION['tries']} tries!</h5>";
        }
        else if(isset($_SESSION['result']) && $_SESSION['result'] == 'High'){
            echo '<div style="margin: auto; border: 2px solid black; width: 100px; height: 100px; text-align: center; background-color: yellow"><p>Too High!</p></div><br/>';
            echo "<h5 style='text-align: center'>{$_SESSION['tries']} tries!</h5>";
        }
    ?>
</body>
</html>