<?php
  include "../functions_db.php";
  $studenId = $_POST['studentId'];
  $res = deleteStudent($studenId);
  header("Location: ../../pages/result-page.php?res=$res&type=del");
?>