<?php
  include_once "../php/functions_db.php";
  include_once "../php/functions/create-drop-down-list-options.php";

  $studentId = $_POST["studentId"];

  $res = getStudentAcademicPerformanceById($studentId);

  createDropDownListOptions($res, "discipline_id", ["disciplineName", "evaluationName"], " - ")
?>