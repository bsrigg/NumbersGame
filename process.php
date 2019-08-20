<?php 
session_start();
$_SESSION['tries'] += 1;
if($_POST['guess'] == $_SESSION['number']){
    $_SESSION['result'] = 'Equals';
}
else if($_POST['guess'] > $_SESSION['number']){
    $_SESSION['result'] = 'High';
}
else{
    $_SESSION['result'] = 'Low';
}
header('Location: game.php');
?>