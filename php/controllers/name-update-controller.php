<?php
  include_once "../../php/functions_db.php";

  $studentId = $_POST['studentId'];
  $firstName = $_POST['firstName'];
  $secondName = $_POST['secondName'];

  if(strlen($firstName) >= 3 && strlen($secondName) >= 3){
    $res = updateStudentNameAndSecondName($studentId, $firstName, $secondName);
    header("Location: ../../pages/result-page.php?res=$res&type=updFirstAndSecName");
  }elseif (strlen($firstName) >= 3) {
    $res = updateStudentName($studentId, $firstName);
    header("Location: ../../pages/result-page.php?res=$res&type=updName");
  }elseif (strlen($secondName) >= 3) {
    $res = updateStudentSecondName($studentId, $secondName);
    header("Location: ../../pages/result-page.php?res=$res&type=updSecName");
  }else {
    header("Location: ../../pages/edit-students-name");
  }
?>