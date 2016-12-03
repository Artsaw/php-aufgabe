<?php 
    require_once('my_fns.php');
    delete_row($_GET['id']);
    header('Location: http://artsaw.de/aufgabe.php'); 
?>