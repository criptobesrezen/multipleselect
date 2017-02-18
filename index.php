<?php include 'connect.php'; ?>
<!DATATYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Библиотека</title>
    
    <!-- Подключение Bootstrap -->
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap-theme.css">
    <!-- JQuery -->
    <script src="assets/jquery-3.1.1.js" type="text/javascript"></script>
    <script src="assets/bootstrap/js/bootstrap.js" type="text/javascript"></script>
    <!-- Файл стилей -->
    <link rel="stylesheet" type="text/css" href="assets/style.css">
</head>
<body>
    <h2>Список моих книг</h2>
    <a href="add.php" class="btn btn-primary"><span class="glyphicon glyphicon-file"></span>&nbsp;Занести новую книгу</a>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>№</th>
                <th>Название книги</th>
                <th>Автор(ы)</th>
                <th>Действия</th>
            </tr>
        </thead>
        <?php
            $sql = "select book_id, book, author from tbl_library";
            $result = mysqli_query($con, $sql);
            if(mysqli_num_rows($result) > 0){
                $i=1;
                while($row = mysqli_fetch_assoc($result)){

        ?>
        <tbody>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?=$row['book']?></td>
                <td><?=$row['author']?></td>
                <td>
                    <a href="edit.php?id=<?=$row['book_id']?>" class="btn btn-info"><span class="glyphicon glyphicon-edit"></span>&nbsp;Изменить</a>
                    <a href="delete.php?id=<?=$row['book_id']?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>&nbsp;Удалить</a>
                </td>
            </tr>
        </tbody>
        <?php 
                }
            }
        ?>
        <tfoot>
            <tr>
                <td></td>
                <td></td>
                <td><a href="addAut.php" class="btn btn-primary"><span class="glyphicon glyphicon-file"></span>&nbsp;Добавить автора</a></td>
                <td><a href="add.php" class="btn btn-primary"><span class="glyphicon glyphicon-file"></span>&nbsp;Добавить книгу</a></td>
            </tr>
        </tfoot>
    </table>
</body>
</html>