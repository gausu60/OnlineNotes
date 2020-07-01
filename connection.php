<?php
$link = mysqli_connect("localhost", "mrgausuo_notesap", "qL4,aN)--W(8", "mrgausuo_Notesapp");
if(mysqli_connect_error()){
    die('ERROR: Unable to connect:' . mysqli_connect_error()); 
    echo "<script>window.alert('Hi!')</script>";
}
?>