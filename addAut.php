<?php
include 'connect.php';

if(isset($_POST['btn_submit'])){
    $sql = "INSERT INTO authors(aut_name)
            VALUES('".$_POST['txt_aut_name']."')";
    if(mysqli_query($con, $sql)){
        echo "Занесено";
    } else {
        echo "Ошибка ".mysqli_error($con);
    }
}
?>
<!DATATYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Добавление автора</title>
    
    <!-- Подключение Bootstrap -->
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap-theme.min.css">
    
    <!-- JQuery -->
    <script src="assets/jquery-3.1.1.js" type="text/javascript"></script>
    <!-- Файл стилей -->
    <link rel="stylesheet" type="text/css" href="assets/style.css">
</head>
<body>
<h2>Добавить автора</h2>
<form action="" method="post">
    <table class="table table-bordered table-striped table-responsive">
        <tr>
            <td>Автор:</td>
            <td><input name="txt_aut_name"></td>
        </tr>
        <tr>
            <td><input class="btn btn-info" type="submit" name="btn_submit" value="Добавить"></td>
            <td><a href="index.php" class="btn btn-danger">Вернуться</a></td>
        </tr>
    </table>
</form>
</body>
</html>