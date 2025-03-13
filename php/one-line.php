<?php
  include_once "functions_db.php";

  $studentInfo = getOneStr();
  $studentName = $studentInfo[0]["Имя"];
  $studentSecondName = $studentInfo[0]["Фамилия"];

  echo "<p class=\"accent-text grade-page__one-line\">Студент $studentSecondName $studentName закончил семестр с такими оценками </p>"

?>



