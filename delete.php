<?php
include 'connect.php';
    
if(isset($_GET['id'])){
    $sql = "DELETE FROM tbl_library WHERE book_id =".$_GET['id'];
    if(mysqli_query($con, $sql)){
        header('Location:index.php');
    } else {
        echo "Ошибка ".mysqli_error($con);
    }
}
?>