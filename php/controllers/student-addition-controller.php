<?php
  include "../functions_db.php";
  $studenName = $_POST['firstName'];
  $studenSecondName = $_POST['secondName'];
  $res = addStudent(trim($studenName), trim($studenSecondName));
  header("Location: ../../pages/result-page.php?res=$res&type=add");
?>