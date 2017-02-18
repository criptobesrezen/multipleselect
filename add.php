<?php
include 'connect.php';


if(isset($_POST['btn_submit'])){
    $authors = $_POST['txt_author'];
    if($authors){
        foreach ($authors as $author) {
                $sql = mysqli_query($con, "INSERT INTO tbl_library(book, author)
                    VALUES('".$_POST['txt_book']."', '".mysqli_real_escape_string($con, $author)."')");
                if($sql){
                header('Location: index.php');
            } else {
                echo "Ошибка ".mysqli_error($con);
            }
        }
    }

}
?>
<!DATATYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Добавление записи</title>
    
    <!-- Подключение Bootstrap -->
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap-theme.min.css">
    
    <!-- Подключение Chosen -->
    <link href="assets/chosen/chosen.css" type="text/css" rel="stylesheet">

    <!-- <script src="js/chosen.jquery.js" type="text/javascript"></script> -->
    <script src="assets/chosen/chosen.proto.js" type="text/javascript"></script>
    <script type="text/javascript">$(".chosen-select").chosen();</script>
    <style type="text/css" media="all">
        /* fix rtl for demo */
        .chosen-rtl .chosen-drop { left: -9000px; }
    </style>
    
    <!-- JQuery -->
    <script src="assets/jquery-3.1.1.js" type="text/javascript"></script>
    <!-- Файл стилей -->
    <link rel="stylesheet" type="text/css" href="assets/style.css">
</head>
<body>
<h2>Добавить книгу</h2>
<form action="" method="post">
    <table class="table table-bordered table-striped table-responsive">
        <tr>
            <td>Книга:</td>
            <td><input placeholder="Название книги" name="txt_book"></td>
        </tr>
        <tr>
            <td>Автор(ы):</td>
            <td>
                <?php
                $sql = "SELECT aut_id, aut_name FROM authors";
                $result = $con->query($sql);
                $resultData = [];
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                         $resultData[$row['aut_id']] = $row['aut_name'];
                    }
                }
                ?>
                <select name="txt_author[]" data-placeholder="Выбор автора(ов)" multiple class="chosen-select">
                <?php
                foreach ($resultData as $key => $value) {
                    echo '<option value="'.$value.'">'.$value.'</option>';
                }
                ?>
                </select>
            </td>
        </tr>
        <tr>
            <td><input class="btn btn-info" type="submit" name="btn_submit" value="Добавить"></td> 
            <td><button class="btn btn-danger" type="button" onClick="history.back();">Отменить</button></td>
        </tr>
    </table>
</form>
    
<script src="assets/chosen/chosen.jquery.js" type="text/javascript"></script>
<script type="text/javascript">
var config = {
  '.chosen-select'           : {},
  '.chosen-select-deselect'  : {allow_single_deselect:true},
  '.chosen-select-no-single' : {disable_search_threshold:10},
  '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
  '.chosen-select-width'     : {width:"95%"}
}
for (var selector in config) {
  $(selector).chosen(config[selector]);
}
</script>
</body>
</html>